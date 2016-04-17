<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Chatbox' --}}
        @yield('title','Chatbot')
    </title>

    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '1008755909213417',
          xfbml      : true,
          version    : 'v2.6'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>

    <h1>Chatbot!</h1>

    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <br><div
      class="fb-like"
      data-share="true"
      data-width="450"
      data-show-faces="true">
    </div>

</body>
</html>