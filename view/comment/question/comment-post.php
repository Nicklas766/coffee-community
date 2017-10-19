<form id="target" action="destination.html">
  <input type="text" value="Hello there">
  <input type="submit" value="Go">
</form>
<div id="other">
  Trigger the handler
</div>

<script>
    $( "#target" ).submit(function( event ) {
      alert( "Handler for .submit() called." );
      event.preventDefault();
    });
    $( "#other" ).click(function() {
      $( "#target" ).submit();
    });
</script>
