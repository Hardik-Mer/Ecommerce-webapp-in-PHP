<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manage-Store</title>
    <?php include "linker.php"; ?>
    <script>
        $(document).ready(function(){
            let toggler = false;
            $('.toggle').click(function(){
                if(toggler==false){
                    // $(this).addClass('toggler-open');
                    $('.navbar').addClass('navbar-open');
                    toggler=true;
                }else{
                    // $(this).removeClass('toggler-open');
                    $('.navbar').removeClass('navbar-open');
                    toggler=false;
                }
            })
        });
    </script>
</head>
<body>
    <header>
        <div id="header">
            <div style="display: flex; align-items: center;">
                <div class="toggle">                    
                    <div class="nav-toggler"></div>
                </div>
                <div class="title">Crezzz</div>
            </div>
            <div class="id">Login</div>
        </div>
    </header>
    <nav class="navbar">
        <div>
            <ul>
                <li>Products</li>
                <li>Orders</li>
                <li>Category</li>
            </ul>
        </div>
    </nav>
</body>
</html>