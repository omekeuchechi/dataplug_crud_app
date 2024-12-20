<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('admin/css/styles.css') }}">
    
</head>
<body>
    <section id="menu">
        <div class="logo">
            <img src="{{ asset('admin/img/game-pad.jpg') }}" alt="">
            <h2>Admin</h2>
        </div>
        <nav class="items">
            <li><a href="#"><img src="{{ asset('admin/icons/chart.svg') }}" alt="" class="icons">Dashboard</a></li>
            <li><a href="#"><img src="{{ asset('admin/icons/table.svg') }}" alt="" class="icons">Tables</a></li>
            <li><a href="#"><img src="{{ asset('admin/icons/form.svg') }}" alt="" class="icons">Forms</a></li>
            <li><a href="#"><img src="{{ asset('admin/icons/credit-card.svg') }}" alt="" class="icons">Cards</a></li>
            <li><a href="#"><img src="{{ asset('admin/icons/settings.svg') }}" alt="" class="icons">Settings</a></li>
            <li><a href="#"><img src="{{ asset('admin/icons/logout.svg') }}" alt="" class="icons">Logout</a></li>
        </nav>
    </section>

    <section id="interface">
        <div class="navigation">
            <div class="n1">
                <div>
                    <img src="{{ asset('admin/icons/bars.svg') }}" id="menu-btn" alt="" class="icons">
                </div>
                <div class="search">
                    <img src="{{ asset('admin/icons/search.svg') }}" alt="" class="icons">
                    <input type="text" placeholder="Search">
                </div>
            </div>
            <div class="profile">
                <img src="{{ asset('admin/icons/bell.svg') }}" alt="" class="icons">
                <img src="{{ asset('admin/img/person-1.jpg') }}" alt="" class="profile-pic">
            </div>
        </div>

        <h3 class="i-name">Dashboard</h3>

        <div class="values">
            <div class="val-box">
                <img src="{{ asset("admin/icons/users.svg") }}" alt="" class="icons">
                <div>
                    <h3>8,3267</h3>
                    <span>New Users</span>
                </div>
            </div>
            <div class="val-box">
                <img src="icons/cart.svg" alt="" class="icons">
                <div>
                    <h3>234,567</h3>
                    <span>Total Orders</span>
                </div>
            </div>
            <div class="val-box">
                <img src="icons/products.svg" alt="" class="icons">
                <div>
                    <h3>89,3267</h3>
                    <span>Product Sale</span>
                </div>
            </div>
            <div class="val-box">
                <img src="icons/dollar-sign.svg" alt="" class="icons">
                <div>
                    <h3>$3,326</h3>
                    <span>This Month</span>
                </div>
            </div>
        </div>

        <div class="board">
            <table width="100%">
                <thead>
                        <td>Name</td>
                        <td>Title</td>
                        <td>Status</td>
                        <td>Role</td>
                        <td></td> 
                </thead>
                <tbody>
                    <tr>
                        <td class="people">
                            <img src="img/person-1.jpg" alt="">
                            <div class="people-de">
                                <h5>John Doe</h5>
                                <p>john@example.com</p>
                            </div>
                        </td>
                        <td class="people-des">
                            <h5>Software Engineer</h5>
                            <p>Web Dev</p>
                        </td>
                        <td class="active">
                            <p>Active</p>
                        </td>
                        <td class="role">
                            <p>Owner</p>
                        </td>
                        <td class="edit"><a href="#">Edit</a></td>
                    </tr>
                    <tr>
                        <td class="people">
                            <img src="img/person-2.jpg" alt="">
                            <div class="people-de">
                                <h5>Alex Jack</h5>
                                <p>jack@example.com</p>
                            </div>
                        </td>
                        <td class="people-des">
                            <h5>Assistant Coach</h5>
                            <p>New York High</p>
                        </td>
                        <td class="active">
                            <p>Active</p>
                        </td>
                        <td class="role">
                            <p>Member</p>
                        </td>
                        <td class="edit"><a href="#">Edit</a></td>
                    </tr>
                    <tr>
                        <td class="people">
                            <img src="img/person-3.jpg" alt="">
                            <div class="people-de">
                                <h5>Phil Jones</h5>
                                <p>phil@example.com</p>
                            </div>
                        </td>
                        <td class="people-des">
                            <h5>Chemist</h5>
                            <p>Phil Jones Clinic</p>
                        </td>
                        <td class="active">
                            <p>Active</p>
                        </td>
                        <td class="role">
                            <p>Member</p>
                        </td>
                        <td class="edit"><a href="#">Edit</a></td>
                    </tr>
                    <tr>
                        <td class="people">
                            <img src="img/person-4.jpg" alt="">
                            <div class="people-de">
                                <h5>Klint Fisher</h5>
                                <p>klint@example.com</p>
                            </div>
                        </td>
                        <td class="people-des">
                            <h5>Professional Football</h5>
                            <p>West California Team</p>
                        </td>
                        <td class="active">
                            <p>Active</p>
                        </td>
                        <td class="role">
                            <p>Member</p>
                        </td>
                        <td class="edit"><a href="#">Edit</a></td>
                    </tr>
                    <tr>
                        <td class="people">
                            <img src="img/person-1.jpg" alt="">
                            <div class="people-de">
                                <h5>Will Rake</h5>
                                <p>will@example.com</p>
                            </div>
                        </td>
                        <td class="people-des">
                            <h5>Associate Professor</h5>
                            <p>Georgia State Uni.</p>
                        </td>
                        <td class="active">
                            <p>Active</p>
                        </td>
                        <td class="role">
                            <p>Member</p>
                        </td>
                        <td class="edit"><a href="#">Edit</a></td>
                    </tr>
                    <tr>
                        <td class="people">
                            <img src="img/person-2.jpg" alt="">
                            <div class="people-de">
                                <h5>Eric Mann</h5>
                                <p>eric@example.com</p>
                            </div>
                        </td>
                        <td class="people-des">
                            <h5>Micro Biologist</h5>
                            <p>Eric Mann Ltd</p>
                        </td>
                        <td class="active">
                            <p>Active</p>
                        </td>
                        <td class="role">
                            <p>Owner</p>
                        </td>
                        <td class="edit"><a href="#">Edit</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/script.js') }}"></script>
</body>
</html>