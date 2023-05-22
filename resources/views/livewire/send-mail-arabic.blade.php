<div class="port_contact_setions" id="scroll_contact">
    <!-- start Contact section  -->
    <div class="contact_section">
        <div class="container">
            <div class="port_contact_mainbox">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="port_hadding_style_sec">
                            <h2 class="port_head_wrapper">معلومات الإتصال بى</h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="port_contact_form" id="contact_session">
                            <form method="POST" wire:submit.prevent="sendMailArabic">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input wire:model.lazy='first_name' type="text" name="first_name"
                                                class="form-control require" id="name" placeholder="الاسم الأول">
                                            @error('first_name')
                                            <p class="response">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input wire:model.lazy='last_name' type="text" name="last_name"
                                                class="form-control require" id="last-name" placeholder="اسم العائلة">
                                            @error('last_name')
                                            <p class="response">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input wire:model.lazy='email' type="email" name="email"
                                                class="form-control require" id="email" placeholder="بريد إلكتروني"
                                                data-valid="email" data-error="Email should be valid.">
                                            @error('email')
                                            <p class="response">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input wire:model.lazy='tel' type="tel" name="tel"
                                                class="form-control require" id="tel" placeholder="هاتف">
                                            @error('tel')
                                            <p class="response">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="select_services row">
                                        <p class="mb-3">ما الخدمات التي تحتاجها ؟</p>
                                        <div class="col-6">
                                            <div class="service_checkbox">
                                                <p><input class="accent-yellow" type="checkbox" name="" id="">
                                                    عرض الموقع</p>
                                            </div>
                                            <div class="service_checkbox">
                                                <p><input class="accent-pink" type="checkbox" name="" id="">
                                                    موقع التجارة الإلكترونية</p>
                                            </div>
                                            <div class="service_checkbox">
                                                <p><input class="accent-orange" type="checkbox" name="" id=""> تطبيق
                                                    الويب</p>
                                            </div>
                                            <div class="service_checkbox">
                                                <p><input class="accent-cyan" type="checkbox" name="" id="">
                                                    تطبيق الهاتف المحمول
                                                </p>
                                            </div>
                                            <div class="service_checkbox">
                                                <p><input class="accent-yellow" type="checkbox" name="" id=""> آخر
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="service_checkbox">
                                                <p><input class="accent-yellow" type="checkbox" name="" id="">
                                                    التصميم الجرافيكي</p>
                                            </div>
                                            <div class="service_checkbox">
                                                <p><input class="accent-pink" type="checkbox" name="" id=""> SEO
                                                </p>
                                            </div>
                                            <div class="service_checkbox">
                                                <p><input class="accent-orange" type="checkbox" name="" id="">
                                                    إعلان</p>
                                            </div>
                                            <div class="service_checkbox">
                                                <p><input class="accent-cyan" type="checkbox" name="" id=""> فيديو
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input wire:model.lazy='subject' type="text" name="subject"
                                                class="form-control" id="subject" placeholder="موضوع">
                                            @error('subject')
                                            <p class="response">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea wire:model.lazy='message' name="message"
                                                class="form-control require" rows="3" id="comment"
                                                placeholder="رسالة"></textarea>
                                            @error('subject')
                                            <p class="message">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="banner_btn">
                                            <button type="submit" data-type="contact"
                                                class="portfolio_btn btn_red submitForm">
                                                <span class="first_text">يقدم</span>
                                                <span class="second_text">يرسل</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Contact section  -->
<div class="port_footer_setions" id="contact_section">
    <!-- start footer section  -->
    <div class="footer_section">
        <div class="container">
            <div class="footer_contact_info">
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <div class="contact_info">
                            <div class="info_img">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.998 511.998"
                                    style="enable-background:new 0 0 511.998 511.998;" width="40px" height="40px">
                                    <g transform="translate(0 -1)">
                                        <g transform="translate(1 2)">
                                            <path style="fill:#8BC34A;"
                                                d="M371.27,370.218h60.817c6.507-0.055,12.539,3.398,15.787,9.037l52.463,93.867
                                                        c2.889,5.405,2.659,11.945-0.605,17.133c-3.263,5.188-9.058,8.228-15.182,7.964H25.457c-6.123,0.264-11.918-2.776-15.182-7.964
                                                        c-3.263-5.188-3.494-11.728-0.605-17.133l52.463-93.867c3.247-5.639,9.28-9.092,15.787-9.037H371.27z" />
                                            <path style="fill:#2E7D32;" d="M484.55,498.218H127.003c0,0,170.667-17.067,213.333-128h91.733
                                                        c6.513-0.07,12.554,3.391,15.787,9.045l52.48,93.867c2.885,5.405,2.652,11.941-0.611,17.126
                                                        C496.463,495.441,490.671,498.48,484.55,498.218z" />
                                            <path style="fill:#4CAF50;" d="M450.417,498.218H127.003c0,0,170.667-17.067,213.333-128h57.6
                                                        c6.513-0.07,12.554,3.391,15.787,9.045l52.48,93.867c2.885,5.405,2.652,11.941-0.611,17.126
                                                        C462.33,495.441,456.538,498.48,450.417,498.218z" />
                                            <path style="fill:#C52828;" d="M417.137,174.207c0,22.357-10.155,50.688-25.344,80.555
                                                        c-16.467,31.182-35.086,61.178-55.723,89.771c-20.309,28.587-40.533,54.357-55.723,72.96c-4.608,5.717-8.789,10.667-12.288,14.933
                                                        c-3.195,3.81-7.897,6.032-12.869,6.081c-4.972,0.049-9.717-2.079-12.987-5.825l-0.256-0.256
                                                        c-3.499-4.267-7.68-9.216-12.288-14.933c-15.189-18.603-35.499-44.373-55.723-72.96c-20.667-28.573-39.288-58.571-55.723-89.771
                                                        c-15.189-29.867-25.344-58.197-25.344-80.555c-0.104-65.237,38.901-124.181,98.987-149.589
                                                        c16.004-6.802,33.009-10.952,50.347-12.288c4.181-0.341,8.533-0.512,12.8-0.512c43.021,0,84.279,17.099,114.688,47.531
                                                        C400.151,89.802,417.224,131.135,417.137,174.207z" />
                                            <path style="fill:#F44335;" d="M391.537,174.207c0,22.357-10.155,50.688-25.344,80.555
                                                        c-16.467,31.182-35.086,61.178-55.723,89.771c-20.309,28.587-40.533,54.357-55.723,72.96c-4.608,5.717-8.789,10.667-12.288,14.933
                                                        l-0.256,0.256l-0.256-0.256c-3.499-4.267-7.68-9.216-12.288-14.933c-15.189-18.603-35.499-44.373-55.723-72.96
                                                        c-20.667-28.573-39.288-58.571-55.723-89.771c-15.189-29.867-25.344-58.197-25.344-80.555
                                                        c-0.104-65.237,38.901-124.181,98.987-149.589c16.004-6.802,33.009-10.952,50.347-12.288c17.338,1.336,34.343,5.486,50.347,12.288
                                                        C352.649,50.009,391.661,108.964,391.537,174.207z" />
                                            <path style="fill:#CFD8DC;" d="M331.803,165.418c-0.066,42.388-34.412,76.734-76.8,76.8c-4.287,0.005-8.568-0.337-12.8-1.024
                                                        c-36.92-6.316-63.914-38.32-63.914-75.776s26.994-69.46,63.914-75.776c4.232-0.687,8.513-1.029,12.8-1.024
                                                        C297.392,88.683,331.738,123.029,331.803,165.418z" />
                                            <path style="fill:#F5F5F5;"
                                                d="M306.203,165.418c-0.088,37.454-27.089,69.423-64,75.776c-36.92-6.316-63.914-38.32-63.914-75.776
                                                        s26.994-69.46,63.914-75.776C279.115,95.994,306.116,127.964,306.203,165.418z" />
                                        </g>
                                        <g>
                                            <path d="M167.974,351.473c21.086,29.73,42.138,56.32,56.09,73.446c2.031,2.492,3.934,4.804,5.777,7.031h-42.103
                                                        c-4.713,0-8.533,3.82-8.533,8.533s3.82,8.533,8.533,8.533H324.27c4.713,0,8.533-3.82,8.533-8.533s-3.821-8.533-8.533-8.533
                                                        h-42.103c1.843-2.227,3.746-4.54,5.786-7.031c13.943-17.067,34.987-43.716,56.081-73.446
                                                        c20.929-28.905,39.767-59.267,56.371-90.854c17.425-34.219,26.266-62.626,26.266-84.437c0.058-45.321-17.926-88.801-49.98-120.841
                                                        c-2.141-2.22-5.313-3.112-8.297-2.333c-2.984,0.779-5.316,3.107-6.099,6.09c-0.783,2.983,0.104,6.156,2.321,8.3
                                                        c28.852,28.844,45.039,67.985,44.988,108.783c0,19.098-8.209,44.902-24.405,76.689c-16.229,30.855-34.64,60.512-55.091,88.747
                                                        c-20.804,29.346-41.6,55.637-55.381,72.533c-4.582,5.615-8.704,10.581-12.22,14.78c-1.641,1.874-4.011,2.948-6.502,2.948
                                                        c-2.491,0-4.861-1.075-6.502-2.948c-3.516-4.198-7.637-9.165-12.22-14.78c-13.781-16.887-34.577-43.179-55.381-72.533
                                                        c-20.451-28.234-38.862-57.892-55.091-88.747c-16.213-31.787-24.405-57.591-24.405-76.689
                                                        c-0.005-61.809,36.959-117.627,93.867-141.747c38.238-16.034,81.314-16.034,119.552,0c2.808,1.191,6.038,0.793,8.472-1.044
                                                        c2.435-1.836,3.705-4.832,3.332-7.859c-0.373-3.027-2.332-5.625-5.14-6.815c-86.898-36.652-187.056,4.062-223.735,90.948
                                                        c-8.895,21.046-13.457,43.669-13.414,66.517c0,21.811,8.841,50.219,26.266,84.48C128.208,292.234,147.047,322.582,167.974,351.473
                                                        z" />
                                            <path
                                                d="M256.003,99.151c4.713,0,8.533-3.821,8.533-8.533c0-4.713-3.821-8.533-8.533-8.533
                                                        c-40.71-0.001-75.752,28.757-83.695,68.685c-7.943,39.928,13.426,79.906,51.037,95.486c37.611,15.58,80.99,2.421,103.608-31.428
                                                        c22.618-33.849,18.175-78.962-10.611-107.749c-2.142-2.218-5.315-3.108-8.299-2.327c-2.983,0.781-5.313,3.111-6.094,6.094
                                                        c-0.781,2.984,0.109,6.156,2.327,8.299c23.03,23.029,26.585,59.118,8.492,86.198c-18.093,27.08-52.796,37.608-82.885,25.146
                                                        c-30.089-12.462-47.186-44.444-40.833-76.387S223.435,99.152,256.003,99.151z" />
                                            <path d="M26.457,508.751H485.55c9.426,0.114,18.192-4.829,22.972-12.954c4.539-7.633,4.64-17.113,0.265-24.841l-52.48-93.867
                                                        c-4.745-8.34-13.624-13.466-23.219-13.406H372.27c-4.713,0-8.533,3.821-8.533,8.533c0,4.713,3.821,8.533,8.533,8.533h60.817
                                                        c3.416-0.066,6.603,1.715,8.337,4.659l52.463,93.867c1.429,2.442,1.399,5.471-0.077,7.885c-1.743,2.88-4.895,4.605-8.26,4.523
                                                        H26.457c-3.362,0.08-6.51-1.646-8.252-4.523c-1.476-2.414-1.505-5.443-0.077-7.885l52.463-93.867
                                                        c1.731-2.943,4.915-4.724,8.329-4.659h60.817c4.713,0,8.533-3.821,8.533-8.533c0-4.713-3.821-8.533-8.533-8.533H78.92
                                                        c-9.6-0.063-18.486,5.063-23.236,13.406L3.212,470.957c-4.375,7.728-4.274,17.208,0.265,24.841
                                                        C8.258,503.925,17.028,508.868,26.457,508.751z" />
                                            <path
                                                d="M418.137,406.351h-34.133c-1.685,0.003-3.332,0.501-4.736,1.434l-25.6,17.067c-3.921,2.616-4.979,7.915-2.364,11.836
                                                        c2.616,3.921,7.915,4.979,11.836,2.364l23.424-15.633h31.573c4.713,0,8.533-3.82,8.533-8.533S422.85,406.351,418.137,406.351z" />
                                            <path d="M366.937,466.084c0,4.713,3.82,8.533,8.533,8.533h68.267c4.713,0,8.533-3.82,8.533-8.533s-3.821-8.533-8.533-8.533H375.47
                                                        C370.757,457.551,366.937,461.371,366.937,466.084z" />
                                            <path d="M153.603,440.484c3.762,0.005,7.083-2.455,8.176-6.055c1.093-3.6-0.301-7.491-3.431-9.578l-25.6-17.067
                                                        c-1.406-0.934-3.056-1.433-4.745-1.434H93.87c-4.713,0-8.533,3.82-8.533,8.533s3.821,8.533,8.533,8.533h31.573l23.45,15.633
                                                        C150.288,439.981,151.927,440.48,153.603,440.484z" />
                                            <path d="M68.27,457.551c-4.713,0-8.533,3.821-8.533,8.533s3.821,8.533,8.533,8.533h68.267c4.713,0,8.533-3.82,8.533-8.533
                                                        s-3.82-8.533-8.533-8.533H68.27z" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <h2 class="footer_heading">العنوان</h2>
                            <p>سانت إتيان دو روفراي</p>
                            <p>نورماندي - فرنسا</p>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <div class="contact_info">
                            <div class="info_img">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.076 512.076" width="35px"
                                    height="40px">
                                    <g transform="translate(-1 -1)">
                                        <g transform="translate(2 2)">
                                            <path style="fill:#558B30;"
                                                d="M499.423,430.246l-26.027,43.349c-4.39,7.359-10.476,13.561-17.749,18.091
                                                        c-4.15,2.614-8.665,4.598-13.397,5.888c-43.179,11.861-138.496,14.336-291.243-138.496S0.649,111.014,12.511,67.835
                                                        c1.29-4.732,3.274-9.247,5.888-13.397c4.53-7.274,10.732-13.359,18.091-17.749l43.349-26.027
                                                        c9.899-5.927,22.707-3.035,29.099,6.571l37.632,56.32l31.488,47.275c6.226,9.447,4.187,22.088-4.693,29.099l-10.411,8.107
                                                        l-28.416,22.016c-8.363,6.532-10.781,18.151-5.717,27.477c11.435,20.48,22.187,44.629,75.605,98.133s77.653,64.171,98.133,75.605
                                                        c9.326,5.063,20.945,2.646,27.477-5.717l22.016-28.416l8.107-10.411c7.011-8.881,19.651-10.919,29.099-4.693l48.725,32.512
                                                        l54.869,36.608C502.457,407.538,505.349,420.347,499.423,430.246z" />
                                            <path style="fill:#8BC34A;"
                                                d="M482.356,447.312l-26.027,43.349c-0.256,0.341-0.427,0.683-0.683,1.024
                                                        c-4.15,2.614-8.665,4.598-13.397,5.888c-43.179,11.861-138.496,14.336-291.243-138.496S0.649,111.014,12.511,67.835
                                                        c1.29-4.732,3.274-9.247,5.888-13.397c0.341-0.256,0.683-0.427,1.024-0.683l43.349-26.027c9.899-5.927,22.707-3.035,29.099,6.571
                                                        l37.632,56.32l31.488,47.275c6.15,9.464,4.12,22.049-4.693,29.099l-28.587,22.187l-10.24,7.936
                                                        c-8.382,6.52-10.803,18.155-5.717,27.477c11.435,20.48,22.187,44.629,75.605,98.133s77.653,64.171,98.133,75.605
                                                        c9.323,5.086,20.957,2.665,27.477-5.717l7.936-10.24l22.187-28.587c7.05-8.814,19.635-10.843,29.099-4.693l48.725,32.512
                                                        l54.869,36.608C485.391,424.605,488.283,437.414,482.356,447.312z" />
                                        </g>
                                        <g>
                                            <path
                                                d="M406.413,513.056c13.543,0.058,27.033-1.704,40.107-5.239c15.212-4.264,28.18-14.256,36.181-27.878l26.061-43.315
                                                        c8.301-13.791,4.282-31.672-9.122-40.585l-103.646-69.12c-13.153-8.701-30.785-5.838-40.508,6.579l-30.191,38.818
                                                        c-3.881,5.116-10.933,6.6-16.546,3.482l-5.743-3.166c-19.038-10.377-42.726-23.296-90.453-71.04
                                                        c-47.727-47.744-60.672-71.45-71.049-90.453l-3.149-5.743c-3.161-5.612-1.705-12.695,3.413-16.606l38.793-30.182
                                                        c12.412-9.725,15.279-27.351,6.588-40.508l-69.12-103.646C109.12,1.056,91.25-2.966,77.461,5.323L34.12,31.358
                                                        C20.502,39.364,10.511,52.33,6.242,67.539c-15.607,56.866-3.866,155.008,140.706,299.597
                                                        C261.952,482.131,347.567,513.056,406.413,513.056z M22.703,72.054c3.116-10.968,10.354-20.307,20.198-26.061l43.341-26.001
                                                        c5.983-3.6,13.739-1.855,17.604,3.959l37.547,56.371l31.514,47.266c3.774,5.707,2.534,13.356-2.85,17.579l-38.801,30.182
                                                        c-11.808,9.029-15.18,25.366-7.91,38.332l3.081,5.598c10.906,20.002,24.465,44.885,73.967,94.379s74.377,63.053,94.37,73.958
                                                        l5.606,3.089c12.966,7.269,29.303,3.898,38.332-7.91l30.182-38.801c4.224-5.381,11.87-6.62,17.579-2.85l103.637,69.12
                                                        c5.819,3.863,7.564,11.622,3.959,17.604l-26.001,43.341c-5.746,9.832-15.072,17.061-26.027,20.173
                                                        c-52.497,14.413-144.213,2.475-283.008-136.32S8.29,124.559,22.703,72.054z" />
                                            <path d="M291.161,86.39c80.081,0.089,144.977,64.986,145.067,145.067c0,4.713,3.821,8.533,8.533,8.533
                                                        c4.713,0,8.533-3.821,8.533-8.533c-0.099-89.503-72.631-162.035-162.133-162.133c-4.713,0-8.533,3.82-8.533,8.533
                                                        C282.628,82.569,286.448,86.39,291.161,86.39z" />
                                            <path d="M291.161,137.59c51.816,0.061,93.806,42.051,93.867,93.867c0,4.713,3.82,8.533,8.533,8.533s8.533-3.821,8.533-8.533
                                                        c-0.071-61.238-49.696-110.863-110.933-110.933c-4.713,0-8.533,3.821-8.533,8.533C282.628,133.769,286.448,137.59,291.161,137.59z
                                                        " />
                                            <path
                                                d="M291.161,188.79c23.552,0.028,42.638,19.114,42.667,42.667c0,4.713,3.82,8.533,8.533,8.533s8.533-3.821,8.533-8.533
                                                        c-0.038-32.974-26.759-59.696-59.733-59.733c-4.713,0-8.533,3.821-8.533,8.533S286.448,188.79,291.161,188.79z" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <h2 class="footer_heading">اتصل بي</h2>
                            <p><a href="javascript:;">+(33)7 49 91 12 11</a></p>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <div class="contact_info">
                            <div class="info_img">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.991 511.991" width="40px"
                                    height="40px">
                                    <g>
                                        <g transform="translate(1 1)">
                                            <path style="fill:#607D8B;"
                                                d="M502.458,195.243v290.133c-0.028,9.414-7.653,17.039-17.067,17.067h-460.8
                                                        c-9.414-0.028-17.039-7.653-17.067-17.067V195.243l3.584-2.731l2.133,2.731h483.499l2.133-2.731L502.458,195.243z" />
                                            <path style="fill:#CFD8DC;"
                                                d="M476.858,195.243v290.133c-0.028,9.414-7.653,17.039-17.067,17.067h-435.2
                                                        c-9.414-0.028-17.039-7.653-17.067-17.067V195.243h463.616l2.133-2.731L476.858,195.243z" />
                                            <path style="fill:#607D8B;"
                                                d="M498.874,192.513l-2.133,2.731l-233.216,179.2h-17.067l-233.216-179.2l-2.133-2.731l81.749-63.573
                                                        l112.469-87.296l39.339-30.549c6.054-4.779,14.596-4.779,20.651,0l39.339,30.549l112.469,87.296L498.874,192.513z" />
                                            <path style="fill:#FDD834;"
                                                d="M417.125,58.71v197.717l-25.6,19.712l-128,98.304h-17.067l-153.6-118.016V58.71
                                                        c0.028-9.414,7.653-17.039,17.067-17.067h290.133C409.472,41.671,417.097,49.296,417.125,58.71z" />
                                            <path style="fill:#FFEB3A;"
                                                d="M391.525,58.71v217.429l-128,98.304h-17.067l-153.6-118.016V58.71
                                                        c0.028-9.414,7.653-17.039,17.067-17.067h264.533C383.872,41.671,391.497,49.296,391.525,58.71z" />
                                            <path style="fill:#607D8B;" d="M499.13,495.446c-3.185,4.409-8.299,7.014-13.739,6.997h-460.8
                                                        c-5.439,0.016-10.553-2.588-13.739-6.997l195.499-151.808l38.315-29.781c6.054-4.779,14.596-4.779,20.651,0l38.315,29.781
                                                        L499.13,495.446z" />
                                        </g>
                                        <g>
                                            <path d="M511.539,193.999c-0.118-0.505-0.281-0.999-0.486-1.476c-0.244-0.452-0.529-0.881-0.853-1.28
                                                        c-0.338-0.489-0.727-0.941-1.161-1.348c-0.137-0.119-0.196-0.282-0.341-0.393l-82.039-63.735V59.71
                                                        c0-14.138-11.462-25.6-25.6-25.6h-92.476L271.556,5.361c-9.149-7.128-21.972-7.128-31.121,0L203.401,34.11h-92.476
                                                        c-14.138,0-25.6,11.462-25.6,25.6v66.057L3.294,189.502c-0.145,0.111-0.205,0.273-0.341,0.393
                                                        c-0.434,0.407-0.823,0.859-1.161,1.348c-0.324,0.399-0.61,0.828-0.853,1.28c-0.207,0.476-0.37,0.97-0.486,1.476
                                                        c-0.178,0.555-0.295,1.127-0.35,1.707c0,0.171-0.102,0.324-0.102,0.503v290.167c0.034,2.748,0.515,5.471,1.425,8.064
                                                        c-1.959,2.954-1.867,6.816,0.229,9.674s5.752,4.106,9.158,3.126c4.312,3.081,9.48,4.737,14.78,4.736h460.8
                                                        c5.322-0.011,10.506-1.691,14.822-4.804c0.728,0.224,1.483,0.347,2.244,0.367c3.117,0.018,5.991-1.68,7.479-4.419
                                                        c1.488-2.739,1.349-6.074-0.362-8.68c0.907-2.593,1.385-5.317,1.417-8.064V196.243c0-0.179-0.094-0.333-0.102-0.503
                                                        C511.836,195.148,511.719,194.565,511.539,193.999z M250.871,18.827c2.98-2.368,7.2-2.368,10.18,0l19.686,15.283h-49.493
                                                        L250.871,18.827z M93.858,221.843c4.713,0,8.533-3.821,8.533-8.533V59.71c0-4.713,3.821-8.533,8.533-8.533h290.133
                                                        c4.713,0,8.533,3.821,8.533,8.533v153.6c0,4.713,3.82,8.533,8.533,8.533s8.533-3.821,8.533-8.533v-65.937l60.032,46.643
                                                        L344.371,304.531c-3.723,2.891-4.397,8.253-1.506,11.977c2.891,3.723,8.253,4.397,11.977,1.506l140.083-108.774v272.341
                                                        L271.539,308.09c-9.143-7.118-21.952-7.118-31.095,0L17.058,481.581V209.239l139.836,108.587
                                                        c3.726,2.889,9.088,2.211,11.977-1.515c2.889-3.725,2.211-9.088-1.515-11.977L25.293,194.016l60.032-46.643v65.937
                                                        C85.325,218.023,89.145,221.843,93.858,221.843z M484.275,494.91H27.708l223.164-173.346c2.982-2.354,7.19-2.354,10.172,0
                                                        L484.275,494.91z" />
                                            <path
                                                d="M170.658,110.91h170.667c4.713,0,8.533-3.821,8.533-8.533c0-4.713-3.82-8.533-8.533-8.533H170.658
                                                        c-4.713,0-8.533,3.821-8.533,8.533C162.125,107.089,165.945,110.91,170.658,110.91z" />
                                            <path
                                                d="M170.658,162.11h170.667c4.713,0,8.533-3.821,8.533-8.533c0-4.713-3.82-8.533-8.533-8.533H170.658
                                                        c-4.713,0-8.533,3.821-8.533,8.533C162.125,158.289,165.945,162.11,170.658,162.11z" />
                                            <path d="M341.325,196.243h-76.8c-4.713,0-8.533,3.821-8.533,8.533s3.82,8.533,8.533,8.533h76.8c4.713,0,8.533-3.82,8.533-8.533
                                                        S346.038,196.243,341.325,196.243z" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <h2 class="footer_heading">راسلني</h2>
                            <p><a href="javascript:;">contact@yassinelabhih.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
