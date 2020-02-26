<footer>

    <script>// When the user scrolls the page, execute myFunction
        window.onscroll = function () {
            myFunction()
        };

        function myFunction() {
            var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            var scrolled = (winScroll / height) * 100;
            document.getElementById("myBar").style.width = scrolled + "%";
        }</script>
    <script src="assets/js/main.js"></script>
  <!--  winScroll : corps de la page ou mobile ?
        check body et documentElement-->

</footer>
</body>
</html>