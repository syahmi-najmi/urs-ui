<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap 5</title>
<style>>
        .dropdown-toggle {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 12px;
            color: hsl(0, 65%, 97%);
            display: block;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
            outline: none;
            border-bottom: 1px solid #ccc;
        }

        .dropdown-container {
            display: none;
            background-color: #E3B448;
            padding-left: 10px;
        }
</style>

</head>

<body>
    <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Umrah</a>
        <button class="dropdown-item dropdown-toggle" href="#" id="multilevelDropdownMenu1"
        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">LAPORAN PENGURUSAN
        </button>
        <div class="dropdown-container">
            <ul href="#">Summary Seat Balance</ul>
            <li href="#">Laporan Pax Tahunan</li>
            <li href="#">Laporan Perbezaan Pencapaian Tahunan</>
            <li href="#">Laporan Jualan & Keuntungan (B2B)</li>
            <li href="#">Laporan Jualan & Keuntungan (VIP)</l>
            <li href="#">Prestasi Pejabat Cawangan</li>
            <a href="#">Laporan Pencapaian Tahunan Pejabat Cawangan Dengan Bajet</a>
        </div>





        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Umrah</a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li class="dropdown dropend">
                    <a class="dropdown-item dropdown-toggle" href="#" id="multilevelDropdownMenu1"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">LAPORAN PENGURUSAN</a>
                    <ul class="dropdown-menu" aria-labelledby="multilevelDropdownMenu1">
                        <a href="#">Summary Seat Balance</a>
                        <a href="#">Laporan Pax Tahunan</a>
                        <a href="#">Laporan Perbezaan Pencapaian Tahunan</a>
                        <a href="#">Laporan Jualan & Keuntungan (B2B)</a>
                        <a href="#">Laporan Jualan & Keuntungan (VIP)</a>
                        <a href="#">Prestasi Pejabat Cawangan</a>
                        <a href="#">Laporan Pencapaian Tahunan Pejabat Cawangan Dengan Bajet</a>
                        <a href="#">  </a>
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

            /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
            var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
</script>

</html>
