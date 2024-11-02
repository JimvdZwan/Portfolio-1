<style>
    .navbar{
    display: flex;
}
.navbar a{
    color: var(--text-color);
    font-weight: 600;
    padding: 5px 10px;
    margin: 2px 25px;
    border-bottom: 2px solid transparent;
    transition: all .38s ease;
}
.navbar a:hover{
    border-bottom: 2px solid #00008B;
    color: #00008B;
}
nav ul {
    float: right;
    margin-right: 20px;
}

nav ul li {
    display: inline-block;
    line-height: 80px;
    margin: 0 5px;
}

nav ul li a {
    color: white;
    font-size: 17px;
    padding: 7px 13px;
    border-radius: 3px;
    text-transform: uppercase;
}

a.active,
a:hover {
    background: #1b9bff;
    transition: .5s;
}

    </style>

<nav>
    <!-- Checkbox for toggling menu -->
    <input type="checkbox" id="check">
    <!-- Menu icon -->
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    <!-- Site logo -->
    <label class="logo">Jim van der Zwan</label>
    <!-- Navigation links -->
    <ul>
        <li><a class="active" href="/">Home</a></li>
        <li><a href="about">Over mij</a></li>
        <li><a href="project">Projecten</a></li>
        <li><a href="contact">Contact</a></li>
    </ul>
</nav>
