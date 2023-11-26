<nav class="navbar bg-dark">
    <h1 class="logo">Fatin Ishmam Mazumdar</h1>
    <ul class="nav-links">
        <li><a href="/">Home</a></li>
        <li><a href="{{url('/aboutMe')}}">About Me</a></li>
        <li><a href="{{url('/projects')}}">Projects</a></li>
        <li class="ctn"><a href="{{url('/contactMe')}}">Contact</a></li>
    </ul>
    <i class="fa-solid fa-bars menu-btn"></i>

</nav>

<script>
    const menuBtn = document.querySelector('.menu-btn');
    const navLinks = document.querySelector('.nav-links');

    menuBtn.addEventListener('click',()=>{
        navLinks.classList.toggle('mobile-menu');
    })
</script>
