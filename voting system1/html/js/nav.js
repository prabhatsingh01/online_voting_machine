class specialHeader extends HTMLElement {
  connectedCallback(){
    this.innerHTML = `
    <nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a class="nav-link active" href="#hero">Home</a></li>
                <li><a class="nav-link active" href="#about">About</a></li>
                <li><a class="nav-link active" href="#contact">Contact</a></li>
                <li><a class="nav-link active" href="login.php">Admin</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">Voters</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="addVoter.php">Register</a></li>
                    </ul>
                </li>
            </ul>
            <h1 class="logo">E-Bharat</h1>
        </div>
    </nav>`
  }
}