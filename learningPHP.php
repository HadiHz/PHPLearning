<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="material/materialize.min.css">

    </head>
    <body>
        <script src="material/jquery-3.2.1.min.js"></script>
        <script src="material/materialize.min.js"></script>

        <p>you can define your variables by $nameOfTheVariable.</p>
        <?php
        date_default_timezone_set("Asia/Tehran");
        echo "The time is " . date("h:i:sa");
        ?>
        <p>this <a href="https://www.w3schools.com/php/php_ref_timezones.asp">page</a> is useful for time zones</p>


        <div class="row">
            <div class="col s1 ">1</div>
            <div class="col s1">2</div>
            <div class="col s1">3</div>
            <div class="col s1">4</div>
            <div class="col s1">5</div>
            <div class="col s1">6</div>
            <div class="col s1">7</div>
            <div class="col s1">8</div>
            <div class="col s1">9</div>
            <div class="col s1">10</div>
            <div class="col s1">11</div>
            <div class="col s1">12</div>
        </div>





        <table class="responsive-table highlight">
            <thead>
            <tr>
                <th>Name</th>
                <th>Item Name</th>
                <th>Item Price</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>Alvin</td>
                <td>Eclair</td>
                <td>$0.87</td>
            </tr>
            <tr>
                <td>Alan</td>
                <td>Jellybean</td>
                <td>$3.76</td>
            </tr>
            <tr>
                <td>Jonathan</td>
                <td>Lollipop</td>
                <td>$7.00</td>
            </tr>
            </tbody>
        </table>



        <div class="col s12 m8 offset-m2 l6 offset-l3">
            <div class="card-panel grey lighten-5 z-depth-1">
                <div class="row valign-wrapper">
                    <div class="col s2">
                        <img src="images/Screenshot%20(6).png" alt="" class="circle responsive-img">
                    </div>
                    <div class="col s10">
              <span class="black-text">
                This is a square image. Add the "circle" class to it to make it appear circular.
              </span>
                    </div>
                </div>
            </div>
        </div>

        <a class="btn btn-floating pulse"><i class="material-icons">menu</i></a>
        <a class="btn btn-floating btn-large pulse"><i class="material-icons">cloud</i></a>
        <a class="btn btn-floating btn-large cyan pulse"><i class="material-icons">edit</i></a>



        <!-- Scaled in -->
        <a id="scale-demo" href="#!" class="btn-floating btn-large scale-transition">
            <i class="material-icons">add</i>
        </a>

        <!-- Scaled out -->
        <a id="scale-demo" href="#!" class="btn-floating btn-large scale-transition scale-out">
            <i class="material-icons">add</i>
        </a>


        <p class="flow-text">I am Flow Text</p>

        <div class="collection">
            <a href="#!" class="collection-item"><span class="badge">1</span>Alan</a>
            <a href="#!" class="collection-item"><span class="new badge">4</span>Alan</a>
            <a href="#!" class="collection-item">Alan</a>
            <a href="#!" class="collection-item"><span class="badge">14</span>Alan</a>
        </div>



        <div class="fixed-action-btn">
            <a class="btn-floating btn-large red">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
            </ul>
        </div>


        <a class="btn-large disabled">Button</a>
        <a class="btn disabled">Button</a>
        <a class="btn-flat disabled">Button</a>
        <a class="btn-floating disabled"><i class="material-icons">add</i></a>


        <div class="row">
            <div class="col s12 m6">
                <div class="card">
                    <div class="card-image">
                        <img src="images/Screenshot%20(6).png">
                        <span class="card-title">Card Title</span>
                        <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card small">
            <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-tabs">
                <ul class="tabs tabs-fixed-width">
                    <li class="tab"><a href="#test4">Test 1</a></li>
                    <li class="tab"><a class="active" href="#test5">Test 2</a></li>
                    <li class="tab"><a href="#test6">Test 3</a></li>
                </ul>
            </div>
            <div class="card-content grey lighten-4">
                <div id="test4">Test 1</div>
                <div id="test5">Test 2</div>
                <div id="test6">Test 3</div>
            </div>
        </div>


        <div class="chip">
            <img src="images/Screenshot%20(6).png" alt="Contact Person">
            Jane Doe
        </div>

        <div class="chip">
            Tag
            <i class="close material-icons">close</i>
        </div>

        <div class="chips"></div>
        <div class="chips chips-initial">heello</div>
        <div class="chips chips-placeholder"></div>
        <div class="chips chips-autocomplete"></div>
        <script>
            $('.chips').material_chip();
            $('.chips-initial').material_chip({
                data: [{
                    tag: 'Apple',
                }, {
                    tag: 'Microsoft',
                }, {
                    tag: 'Google',
                }],
            });
            $('.chips-placeholder').material_chip({
                placeholder: 'Enter a tag',
                secondaryPlaceholder: '+Tag',
            });
            $('.chips-autocomplete').material_chip({
                autocompleteOptions: {
                    data: {
                        'Apple': null,
                        'Microsoft': null,
                        'Google': null
                    },
                    limit: Infinity,
                    minLength: 1
                }
            });

            var chip = {
                tag: 'chip content',
                image: '', //optional
                id: 1, //optional
            };
        </script>
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo">Logo</a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="sass.html">Sass</a></li>
                        <li><a href="badges.html">Components</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Last Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                        <label for="disabled">Disabled</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        This is an inline input field:
                        <div class="input-field inline">
                            <input id="email" type="email" class="validate">
                            <label for="email" data-error="wrong" data-success="right">Email</label>
                        </div>
                    </div>
                </div>
            </form>
        </div>


        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Footer Content</h5>
                        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2014 Copyright Text
                    <p>Automatic Copyright Year</p>
                    &copy; 2010-<?php echo date("Y");?>
                    <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                </div>
            </div>
        </footer>

    </body>

</html>