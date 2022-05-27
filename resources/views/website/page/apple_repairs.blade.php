@extends('website.master')
@section('web_content')

    <script>
    var deferCss = {
        hidden: true,
        timeout: null,
        unhide: function() {
            if (deferCss.hidden) {
                var hider = document.getElementById('cssHide');
                hider && hider.parentElement.removeChild(hider);
                deferCss.hidden = false;
            }
        },
        applyAllCss: function() {
            if (!deferCss.hidden) {
                return;
            }
            clearTimeout(deferCss.timeout);
            var links = document.querySelectorAll('.cssReady, .cssPreload');
            var link;
            for (var i = 0; i < links.length; ++i) {
                link = links[i];
                link.onload = null;
                link.rel = 'stylesheet';
            }
            deferCss.unhide();
        },
        cssLoaded: function(link, success) {
            link.className = success ? "cssReady" : "cssFailed";
            if (!success) {
                console.error(link.href + " failed to load");
                
            }
            var stillWaiting = document.querySelector('.cssPreload');
            if (!stillWaiting) {
                deferCss.applyAllCss();
            }
        },
        setTimeout: function() {
            deferCss.timeout = setTimeout(function() {
                console.warn("Deferred CSS took too long to load. Displaying anyway...");
                deferCss.applyAllCss();
            }, 7000);
        }
    };
    deferCss.setTimeout();
    </script>
    <link type="text/css" href="https://d1ulmmr4d4i8j4.cloudfront.net/Assets/Guide/ifixit/guide-all-5JH0TqSgwZ8mG6aoBRThPQ.css"rel="preload" as="style" onload="deferCss.cssLoaded(this, true)"
    onerror="this.onerror = this.onload = null; deferCss.cssLoaded(this, false);"class="cssPreload"/>
    <link type="text/css" href="https://d1ulmmr4d4i8j4.cloudfront.net/Assets/Admin/ifixit/font-awesome-giGvg0XddkuKqOmX56z43Q.css"rel="preload" as="style" onload="deferCss.cssLoaded(this, true)"
    onerror="this.onerror = this.onload = null; deferCss.cssLoaded(this, false);"class="cssPreload"/>
    <link type="text/css" href="https://d1ulmmr4d4i8j4.cloudfront.net/Assets/Guide/ifixit/module-all-QNLw5eFYRRahhdbWs1E9Xg.css"rel="preload" as="style" onload="deferCss.cssLoaded(this, true)"
    onerror="this.onerror = this.onload = null; deferCss.cssLoaded(this, false);"class="cssPreload"/>
    <link type="text/css" href="https://d1ulmmr4d4i8j4.cloudfront.net/Assets/Guide/ifixit/core-r5fsMeHWlD1e12yqPPAgNA.css"rel="preload" as="style" onload="deferCss.cssLoaded(this, true)"
    onerror="this.onerror = this.onload = null; deferCss.cssLoaded(this, false);"class="cssPreload"/>
    <link type="text/css" href="https://d1ulmmr4d4i8j4.cloudfront.net/Assets/Guide/ifixit/Wiki-topic-0T-3zsB-RLLiU7k2cJwgRA.css"rel="preload" as="style" onload="deferCss.cssLoaded(this, true)"
    onerror="this.onerror = this.onload = null; deferCss.cssLoaded(this, false);"class="cssPreload"/>
    <link type="text/css" href="https://d1ulmmr4d4i8j4.cloudfront.net/Assets/Guide/ifixit/Wiki-common-cdPQdPcCkDVw4rowtzklsQ.css"rel="preload" as="style" onload="deferCss.cssLoaded(this, true)"
    onerror="this.onerror = this.onload = null; deferCss.cssLoaded(this, false);"class="cssPreload"/>
 
<script defer src="https://melbournemobilephonerepairs.com.au/frontend/wp-content/cache/autoptimize/js/autoptimize_767f35cf59fa04b4b498463874a1e024.js"></script>
			
						
                <div id="page" class="hide-until-css-loaded invisible">
                   

                    <div id="main" >
                        <div id="mainBody" >
                            <div class="statuses">
                               
                            </div>
                            <div id="banner">
                                <div class="statuses">
                                  
                                </div>
                                <div id="banner-wrap" >
                                    <div id="banner-wrap-bg-container">
                                        <img id="banner-wrap-bg" src="https://melbournemobilephonerepairs.com.au/frontend/image/iphone.png" itemprop="image">
                                    </div>
                                    <div class="banner-content">
                                        <div class="banner-bucket">
                                            <div class="banner-small-photo">
                                                <img src="https://melbournemobilephonerepairs.com.au/frontend/image/iphone.png" alt="Apple iPhone Repair">
                                            </div>
                                        </div>
                                        <div class="banner-bucket banner-summary">
                                            <div class="banner-text">
                                                <h1 class="banner-title" itemprop="headline" style="font-size:33px;">Apple Phone Repairs</h1><br>
                                                <p class="banner-blurb">
                                                    <span class="topicHeaderText originalText" itemprop="description" style="font-size:18px;">
                                                        Melbourne Mobile Phone Repair has solutions and fixes available for all types of phones. We offer trusted mobile screen replacement services. Our clients and customers trusts our world-class services which makes us to move forward gracefully.    
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="clearer"></div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="subcategorySection">
                                <h2 id='Section_Categories' class="js-dynamic-toc-section">Apple Phone</h2>
                                <div class="categoryListCell">
                                    <a href="iPhone-repairs" class="categoryAnchor">
                                        <img src="https://melbournemobilephonerepairs.com.au/frontend/image/iphone.png" alt="iPhone" class="category-image">
                                        <h5 class="title">iPhone</h5>
                                    </a>
                                </div>
                                <div class="categoryListCell">
                                    <a href="macbook-repairs" class="categoryAnchor">
                                        <img src="https://melbournemobilephonerepairs.com.au/frontend/image/macbook.png" alt="MacBook " class="category-image">
                                        <h5 class="title">MacBook</h5>
                                    </a>
                                </div>
                                <div class="categoryListCell">
                                    <a href="iPad-repairs" class="categoryAnchor">
                                        <img src="https://melbournemobilephonerepairs.com.au/frontend/image/ipad.png" alt="IPAD" class="category-image">
                                        <h5 class="title">iPAD</h5>
                                    </a>
                                </div>
                                <div class="categoryListCell">
                                    <a href="iPod-repairs" class="categoryAnchor">
                                        <img src="https://melbournemobilephonerepairs.com.au/frontend/image/ipod.png" alt="iPod" class="category-image">
                                        <h5 class="title">iPod</h5>
                                    </a>
                                </div>
                                <div class="categoryListCell">
                                    <a href="iWatch-repairs" class="categoryAnchor">
                                        <img src="https://melbournemobilephonerepairs.com.au/frontend/image/iwatch.png" alt="iWatch" class="category-image">
                                        <h5 class="title">iWatch</h5>
                                    </a>
                                </div>
                              
                            </div>
                        
                            <div id="contentFloat">
                                <div id="content">
                                    <div class="container articleContainer topic">
                                        <meta itemprop="name" content="iPhone">
                                        <div id="Wiki_Details">
                                            <div class="col-md-9 col-xs-7">
                                                <div class="clearer"></div>
                                                <div class="headerContainer">
                                                    <a class="selfLink" href="#Section_Background_and_Identification" title="Link to this section" aria-hidden="true">
                                                        <i  class="svg-icon"   style="display: inline-block; width: 16px; height: 16px;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="currentColor">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.1 2.899a3.976 3.976 0 0 0-5.622 0l-.94.94A.85.85 0 0 0 7.742 5.04l.94-.939a2.276 2.276 0 1 1 3.218 3.219l-.94.94a.85.85 0 1 0 1.203 1.201l.939-.94a3.976 3.976 0 0 0 0-5.622zM2.9 13.101a3.976 3.976 0 0 0 5.622 0l.94-.94a.85.85 0 0 0-1.203-1.201l-.94.939A2.276 2.276 0 1 1 4.102 8.68l.94-.94A.85.85 0 0 0 3.839 6.54l-.94.94a3.976 3.976 0 0 0 0 5.622z"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.119 5.881a.875.875 0 0 1 0 1.238l-3 3A.875.875 0 0 1 5.88 8.88l3-3a.875.875 0 0 1 1.238 0z"></path>
                                                            </svg>
                                                        </i>
                                                    </a>
                                                    <h2 id="Section_Background_and_Identification" class="header">Details</h2>
                                                </div>
                                                <p>Searching for a phone repair service in Melbourne, contact us for a hassle-free and reliable service. Our experienced technicians provide trustworthy and reliable service that satisfies your needs and demands of phone repairing. We have proper fixes for all phones, you just name the brand and we have a fix for that. Our quality services have no comparison across the Melbourne.<br>
                                                <div class="clearer"></div>
                                            </div>
                                        </div>
                                        <div class="clearer"></div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                (function() {
                                    var headings = document.querySelectorAll('#mainBody [id^="Section_"]');
                                    var pageSidebar = document.getElementById('page-sidebar');
                                    if (pageSidebar && headings.length <= 1) {
                                        // Must remove elements this way to maintain IE11 support
                                        pageSidebar.parentNode.removeChild(pageSidebar);
                                    }
                                    document.getElementById('page').classList.remove("invisible");
                                })();
                                </script>
                            </div>
                        </div>
                    </div>
                    
    @endsection
