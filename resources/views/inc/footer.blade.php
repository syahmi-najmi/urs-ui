<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container py-5">
        <h1 class="mb-4">UMRAH</h1>
        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-bs-toggle="dropdown" aria-expanded="false">
                uMRAH
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li class="dropdown dropend">
                    <a class="dropdown-item dropdown-toggle" href="#" id="multilevelDropdownMenu1"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Multilevel Action 1</a>
                    <ul class="dropdown-menu" aria-labelledby="multilevelDropdownMenu1">
                        <li class="dropdown dropend">
                            <a class="dropdown-item dropdown-toggle" href="#" id="multilevelDropdownMenu1"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Multilevel Action
                                2</a>
                            <ul class="dropdown-menu" aria-labelledby="multilevelDropdownMenu2">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="container py-5">
        <h1 class="mb-4">UMRAH</h1>
        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-bs-toggle="dropdown" aria-expanded="false">
                uMRAH
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li class="dropdown dropend">
                    <a class="dropdown-item dropdown-toggle" href="#" id="multilevelDropdownMenu1"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Multilevel Action 1</a>
                    <ul class="dropdown-menu" aria-labelledby="multilevelDropdownMenu1">
                        <li class="dropdown dropend">
                            <a class="dropdown-item dropdown-toggle" href="#" id="multilevelDropdownMenu1"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Multilevel Action
                                2</a>
                            <ul class="dropdown-menu" aria-labelledby="multilevelDropdownMenu2">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</body>

<script>
    var myDropdown = document.getElementsByClassName('dropdown-toggle')
    for (i = 0; i < myDropdown.length; i++) {
        myDropdown[i].addEventListener('click', function() {
            var el = this.nextElementSibling;
            el.style.display = el.style.display == 'block' ? 'none' : 'block';
        });
    }
</script>

</html>
