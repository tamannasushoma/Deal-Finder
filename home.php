<?php include('login_header.php'); ?>


<style type="text/css">
    .carousel-indicators li {
        display: inline-block;
        width: 10px;
        height: 10px;
        margin: 10px;
        text-indent: 0;
        cursor: pointer;
        border: none;
        border-radius: 50%;
        background-color: #000000;
        box-shadow: inset 1px 1px 1px 1px rgba(0,0,0,0.5);    
    }
    .carousel-indicators .active {
        width: 15px;
        height: 15px;
        margin: 10px;
        background-color: #c4c4c4;
}
</style>
<div class="container">
        <div class="h3 text-center toprated"> Here's some of the top-rated dealss of the week: </div>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>

                <li data-target="#myCarousel" data-slide-to="3"></li>

                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
                <li data-target="#myCarousel" data-slide-to="6"></li>
            </ol>
            
           
            

        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
</div>
<?php include('footer.php'); ?>