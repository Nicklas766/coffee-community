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
        $question = new Question($this->di->get("db"));
        $user     = new User($this->di->get("db"));

        //Sort by highest posts
        $users = $user->getAllUsers();
        usort($users, function ($current, $next) {
            return $current->postAmount < $next->postAmount;
        });

        $questions = $question->getQuestions();
        $tags      = $question->getPopularTags();

        $questions = array_slice($questions, 0, 4);
        $tags      = array_slice($tags, 0, 5);
        $users     = array_slice($users, 0, 4);

        $form       = new CreateUserForm($this->di);
        $form->check();

        $views = [
            ["page/home/home", ["tags" => $tags], "home"],
            ["components/service-banner", [], "service-banner"],
            ["page/home/view-questions", ["questions" => $questions, "users" => $users], "question"],
            ["page/home/signup", ["form" => $form->getHTML()], "signup"],
            ["page/home/wrappedHome", [], "main"],

        ];
        $this->di->get("pageRenderComment")->renderPage([
            "views" => $views,
            "title" => "Coffee Community"
        ]);
    }

    /**
     * Renders the homepage
     *
     * @return void
     */
    public function getTags()
    {
        $question = new Question($this->di->get("db"));

        $tags      = $question->getPopularTags();

        $views = [
            ["page/tags", ["tags" => $tags], "main"],
        ];
        $this->di->get("pageRenderComment")->renderPage([
            "views" => $views,
            "title" => "Coffee Community | Tags"
        ]);
    }
}
