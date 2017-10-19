<?php

namespace Nicklas\CoffeeCommunity;

// ANAX
use \Anax\Configure\ConfigureInterface;
use \Anax\Configure\ConfigureTrait;
use \Anax\DI\InjectionAwareInterface;
use \Anax\DI\InjectionAwareTrait;

// HTMLForms
use \Nicklas\Comment\HTMLForm\User\CreateUserForm;

// MODULES
use \Nicklas\Comment\Modules\User;
use \Nicklas\Comment\Modules\Question;
use \Nicklas\Comment\Modules\Comment;
use \Nicklas\Comment\Modules\Post;

/**
 * A controller class.
 */
class PageController implements
    ConfigureInterface,
    InjectionAwareInterface
{
    use ConfigureTrait, InjectionAwareTrait;


    /**
     * Renders the homepage
     *
     * @return void
     */
    public function getHome()
    {
        $users = new User($this->di->get("db"));
        $question = new Question($this->di->get("db"));


        $tags = $question->getPopularTags();
        $questions = $question->getQuestions();

        $questions = array_slice($questions, 0, 4);

        $form       = new CreateUserForm($this->di);
        $form->check();

        $views = [
            ["page/home/home", ["tags" => $tags], "home"],
            ["components/service-banner", [], "service-banner"],
            ["page/home/view-questions", ["questions" => $questions], "question"],
            ["page/home/signup", ["form" => $form->getHTML()], "signup"],
            ["page/home/wrappedHome", [], "main"],

        ];
        $this->di->get("pageRenderComment")->renderPage([
            "views" => $views,
            "title" => "Login"
        ]);
    }
}
