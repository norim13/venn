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
       <div id="search-container">
           <div class="top-search">
               <input id="text-search" type="text" name="search">
           </div>
           <div class="form-inline bottom-search">
               <label for="radio-posts"> <input id="radio-posts" type="radio" name="search-scope" value="posts" checked="checked">Posts</label>
               <label for="radio-people"><input id="radio-people" type="radio" name="search-scope" value="people">People</label>
               <button id="search-btn" type="button" class="btn">Search</button>
           </div>
       </div>


    </div>
</div>