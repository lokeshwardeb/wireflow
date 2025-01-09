<!-- <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
    aria-controls="offcanvasExample">
    Link with href
</a> -->


<button class="btn float-end" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
    aria-controls="offcanvasExample">
    <i class="fa-solid fs-2 fa-bars"></i>
</button>

<div class="offcanvas offcanvas-start w-100 " tabindex="-1" id="offcanvasExample"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Wireflow</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="d-gfdflex justify-content-center" >

        <div class="mobile_brand_section d-block ">
            <?php

            require __DIR__ . '/_brand_name_section.php';

            ?>
        </div>

            <?php

            require __DIR__ . '/_ul_li_info.php';

            ?>
        </div>

    </div>
</div>