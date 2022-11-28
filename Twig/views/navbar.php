<body>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">News</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/section?section=Latvia">LV NEWS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/section?section=sport">SPORT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/section?section=technology">TECHNOLOGY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/section?section=business">BUSINESS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/section?section=health">HEALTH</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">
                        <script> document.write(new Date().toLocaleDateString()); </script>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="example">
    <form class="example" action="/search">
        <input type="text" placeholder="Search for News..." name="search">
    </form>
</div>
</body>
