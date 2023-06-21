<div class="sideNav sticky-top">
    <div class="d-flex flex-column mb-4">
        <div class="d-flex justify-content-center">
            <div class="sideNav-item-header mt-4">
                <div class="d-flex">
                    <img src="images/metropost-logo.jpg" class="sys_logo_side_nav">
                </div>
                
                
                <div class="partition"></div>
                <span class="sys_name mt-2">POST MIGRATION</span>
            </div>
        </div> 
    </div>
    
    <a href="dashboard">
        <div class="sideNav-item" attr-nav="dashboard">
            <i class="fa-light fa-gauge-min"></i> <span>Dashboard</span>
        </div>
    </a>
    <a href="article-extraction-single">
        <div class="sideNav-item" attr-nav="single">
            <i class="fa-light fa-newspaper"></i> <span>Single</span>
        </div>
    </a>
    <a href="article-lists-extracted">
        <div class="sideNav-item" attr-nav="extracted">
            <i class="fa-light fa-clipboard-list-check"></i> <span>Extracted Articles</span>
        </div>
    </a>
    <!-- <a href="article-extraction-multiple">
        <div class="sideNav-item" attr-nav="multiple">
            <i class="fa-light fa-file-import"></i> <span>Multiple</span>
        </div>
    </a> -->
    <!-- <a href="article-lists-migrated">
        <div class="sideNav-item" attr-nav="migrated">
            <i class="fa-light fa-clipboard-list-check"></i> <span>Migrated Posts</span>
        </div>
    </a> -->
    <a href="logs">
        <div class="sideNav-item" attr-nav="logs">
            <i class="fa-light fa-hourglass-clock"></i> <span>Logs</span>
        </div>
    </a>


</div>

<script>
    $(document).ready(function() {
        CheckActiveNav();
    });
</script>