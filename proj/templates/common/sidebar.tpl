<div  id="sidebar" class="sidebar sidebar-collapse" role="navigation">
    <div class="sidebar-ul" >
        <div id="search-toggle" class="sidebar-item">
            <div class="vcentered-content">
                <div class="vcentered-space"></div>
                <div class="vcentered-space sidebar-item-content">
                    <!--<a href="index.php">-->
                    <i class="fa fa-search fa-2x button-toggle-grey" ></i>
                    <p class="button-toggle-grey"> Search </p>
                    <!--</a>-->
                </div>
                <div class="vcentered-space"></div>
            </div>
        </div>

        <div class="sidebar-item">
            <div class="vcentered-content">
                <div class="vcentered-space"></div>
                <div class="vcentered-space sidebar-item-content">
                    <a href="{$BASE_URL}">

                        <i class="fa fa-home fa-2x button-toggle-grey"></i>
                        <p class="button-toggle-grey"> Home </p>
                    </a>
                </div>
                <div class="vcentered-space"></div>
            </div>
        </div>

        <div class="sidebar-item">
            <div class="vcentered-content">
                <div class="vcentered-space"></div>
                <div class="vcentered-space sidebar-item-content">
                    <a href="{$BASE_URL}pages/users/profile.php">
                        <i class="fa fa-user fa-2x button-toggle-grey"></i>
                        <p class="button-toggle-grey"> Profile </p>
                    </a>
                </div>
                <div class="vcentered-space"></div>
            </div>
        </div>

        <div class="sidebar-item">
            <div class="vcentered-content">
                <div class="vcentered-space"></div>
                <div class="vcentered-space sidebar-item-content">
                    <a href="{$BASE_URL}pages/users/circles.php">
                        <i class="fa fa-circle-thin fa-2x button-toggle-grey"></i>
                        <p class="button-toggle-grey"> Circles </p>
                    </a>
                </div>
                <div class="vcentered-space"></div>
            </div>
        </div>
    </div>

    <div id="search-field" class="search-field">
        <input type="text" name="search">
        <button id="search-btn" type="button" class="btn">Search</button>
    </div>
</div>