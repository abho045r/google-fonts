<style>
    
</style>
<div class='container-sm main line-numbers'>
    <h1>Roboto FONT FAMILY</h1>
    <div class="mySlides">
        <div class="numbertext">1 / 6</div>
        <img src="https://befonts.com/wp-content/uploads/2023/11/Specta-Ordinary-2-BF65682b21ae30a.jpg"
            style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">2 / 6</div>
        <img src="https://befonts.com/wp-content/uploads/2023/11/Specta-Ordinary-6-BF65682b22ab2e9.jpg"
            style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">3 / 6</div>
        <img src="https://befonts.com/wp-content/uploads/2023/11/Specta-Ordinary-1200-X-800-1-BF65682ad527999.jpg"
            style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">4 / 6</div>
        <img src="https://befonts.com/wp-content/uploads/2023/11/Specta-Ordinary-2-BF65682b21ae30a.jpg"
            style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">5 / 6</div>
        <img src="https://befonts.com/wp-content/uploads/2023/11/Specta-Ordinary-5-BF65682b2249b26.jpg"
            style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">6 / 6</div>
        <img src="https://befonts.com/wp-content/uploads/2023/11/Specta-Ordinary-1-BF65682b21ed24f.jpg"
            style="width:100%">
    </div>
    <div class="row slider">
        <div class="col ">
            <img class="demo cursor"
                src="https://befonts.com/wp-content/uploads/2023/11/Specta-Ordinary-2-BF65682b21ae30a.jpg"
                style="width:100%" onclick="currentSlide(1)" alt="The Woods">
        </div>
        <div class="col">
            <img class="demo cursor"
                src="https://befonts.com/wp-content/uploads/2023/11/Specta-Ordinary-6-BF65682b22ab2e9.jpg"
                style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
        </div>
        <div class="col">
            <img class="demo cursor"
                src="https://befonts.com/wp-content/uploads/2023/11/Specta-Ordinary-1200-X-800-1-BF65682ad527999.jpg"
                style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
        </div>
        <div class="col">
            <img class="demo cursor"
                src="https://befonts.com/wp-content/uploads/2023/11/Specta-Ordinary-2-BF65682b21ae30a.jpg"
                style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
        </div>
        <div class="col">
            <img class="demo cursor"
                src="https://befonts.com/wp-content/uploads/2023/11/Specta-Ordinary-5-BF65682b2249b26.jpg"
                style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
        </div>
        <div class="col">
            <img class="demo cursor"
                src="https://befonts.com/wp-content/uploads/2023/11/Specta-Ordinary-1-BF65682b21ed24f.jpg"
                style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
        </div>
    </div>



    <div class='top-desc'>
        <p>Roboto by Indian Type Foundry and Jonny Pinhorn is a geometric sans serif typeface
            with support for Devanagari and Latin writing systems. It features rationalist Latin
            glyphs and the first-ever range of weights for Devanagari in this genre. The typeface is
            designed based on pure geometry, with nearly monolinear letterforms. Indian Type
            Foundry creates retail and custom multilingual fonts, while Jonny Pinhorn specializes
            in Indic scripts</p>
    </div>

    <hr style="color:#8a9094;">
    <div>
        <h3 style="margin-right: 15px;">Roboto Font Family CSS Style</h3>
        <p>Simply use the provided CSS rules to define these font families.</p>
    </div>
    <pre class="language-css"><code  class="language-css">font-family: 'Roboto', sans-serif;</code></pre>

    <div class="flex-container">
        <h3 style="margin-right: 15px;">Roboto Google Fonts CDN Link</h3>

    </div>
    <pre class="language-markup"><code class="language-markup">&lt;link rel="preconnect" href="https://fonts.googleapis.com"&gt;
&lt;link rel="preconnect" href="https://fonts.gstatic.com" crossorigin&gt;
&lt;link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet"&gt;</code></pre>

    <div class="flex-container">
        <h3 style="margin-right: 15px;">Roboto Google Fonts Import</h3>
    </div>
    <pre class="language-css">
  <code class="language-css">
    &lt;style&gt;
@import url('https://fonts.googleapis.com/css2?family=Roboto');
&lt;/style&gt;</code>
</pre>

    <div class='flex-container' ;>
        <h2>Roboto Font Family CSS Editor</h2>
    </div>
    <div class="list-group-item ">
        <button class=" badge" onclick="advPasteText()"><i class="fa-solid fa-paste"></i></button>
    </div>
    <textarea type="text" class="form-control" id="preview-input" rows='5' style="font-size: 18px;"
        placeholder="Type to preview your font">The quick brown fox jumps over the lazy dog</textarea>

    <div class="row">
        <div class="col-md-5">
            <div class="custom-container">
                <label for="size-input" class="form-label fw-bold">Size</label>
                <input type="range" class="" id="size-input" min="1" max="150" step="1" value="18">
                <span id="size-display" class="">18px</span>
            </div>

        </div>

    </div>

    <div class="flex-container">
        <span class="fw-bold">Color:</span>
        <button class="btn fa-rounded-btn rounded-circle colorUpdateButton" style="background-color: #000000;"></button>
        <button class="btn fa-rounded-btn rounded-circle colorUpdateButton" style="background-color: #434343;"></button>
        <button class="btn fa-rounded-btn rounded-circle colorUpdateButton" style="background-color: #666666;"></button>
        <button class="btn fa-rounded-btn rounded-circle colorUpdateButton" style="background-color: #999999;"></button>
        <button class="btn fa-rounded-btn rounded-circle colorUpdateButton" style="background-color: #b7b7b7;"></button>
        <button class="btn fa-rounded-btn rounded-circle colorUpdateButton" style="background-color: #cccccc;"></button>
        <button class="btn fa-rounded-btn rounded-circle colorUpdateButton" style="background-color: #d9d9d9;"></button>
        <button class="btn fa-rounded-btn rounded-circle colorUpdateButton" style="background-color: #8B1A10;"></button>
        <button class="btn fa-rounded-btn rounded-circle colorUpdateButton" style="background-color: #EA3323;"></button>
        <button class="btn fa-rounded-btn rounded-circle colorUpdateButton" style="background-color: #F19E39;"></button>
        <button class="btn fa-rounded-btn rounded-circle colorUpdateButton" style="background-color: #FFFF55;"></button>
        <button class="btn fa-rounded-btn rounded-circle colorUpdateButton" style="background-color: #75FB4C;"></button>
        <button class="btn fa-rounded-btn rounded-circle colorUpdateButton" style="background-color: #75FBFD;"></button>
        <button class="btn fa-rounded-btn rounded-circle colorUpdateButton" style="background-color: #5985E1;"></button>
        <button class="btn fa-rounded-btn rounded-circle colorUpdateButton" style="background-color: #0000F5;"></button>
        <button class="btn fa-rounded-btn rounded-circle colorUpdateButton" style="background-color: #8C1AF6;"></button>
        <button class="btn fa-rounded-btn rounded-circle colorUpdateButton" style="background-color: #EA33F7;"></button>
        <button class="btn fa-rounded-btn rounded-circle colorUpdateButton" style="background-color: #D08370;"></button>
        <button class="btn fa-rounded-btn rounded-circle colorUpdateButton" style="background-color: #DF9D9B;"></button>
        <button class="btn fa-rounded-btn rounded-circle colorUpdateButton" style="background-color: #BB271A;"></button>

    </div>

    <div class="flex-container" style="border:none">
        <span class="fw-bold">BG Color:</span>
        <button class="btn fa-rounded-btn bgColorUpdateButton" style="background-color: #00C853;"></button>
        <button class="btn fa-rounded-btn bgColorUpdateButton " style="background-color: #00E676"></button>
        <button class="btn fa-rounded-btn bgColorUpdateButton" style="background-color: #D50000"></button>
        <button class="btn fa-rounded-btn bgColorUpdateButton" style="background-color:#FF1744"></button>
        <button class="btn fa-rounded-btn bgColorUpdateButton" style="background-color:#C51162"></button>
        <button class="btn fa-rounded-btn bgColorUpdateButton" style="background-color: #F50057;"></button>
        <button class="btn fa-rounded-btn bgColorUpdateButton" style="background-color: #AA00FF"></button>
        <button class="btn fa-rounded-btn bgColorUpdateButton" style="background-color:#D500F9"></button>
        <button class="btn fa-rounded-btn bgColorUpdateButton" style="background-color: #613400;"></button>
        <button class="btn fa-rounded-btn bgColorUpdateButton" style="background-color: #876800;"></button>
        <button class="btn fa-rounded-btn bgColorUpdateButton" style="background-color: #254000;"></button>
        <button class="btn fa-rounded-btn bgColorUpdateButton" style="background-color: #3f6600;"></button>
        <button class="btn fa-rounded-btn bgColorUpdateButton" style="background-color: #092b00;"></button>
        <button class="btn fa-rounded-btn bgColorUpdateButton" style="background-color: #135200;"></button>
        <button class="btn fa-rounded-btn bgColorUpdateButton" style="background-color: #520339;"></button>
        <button class="btn fa-rounded-btn bgColorUpdateButton" style="background-color: #08979c;"></button>
        <button class="btn fa-rounded-btn bgColorUpdateButton" style="background-color: #efdbff;"></button>
        <button class="btn fa-rounded-btn bgColorUpdateButton" style="background-color: #adc6ff;"></button>
        <button class="btn fa-rounded-btn bgColorUpdateButton" style="background-color:#120338;"></button>

    </div>

    <ul class="list-group mb-2 ">
        <li class="list-group-item  p-0 border-0 align-items-center">
            <div class="badge" style="font-size: 14px;margin:0; float:none;background-color: #fff;color:#8a9094;">Thin
                100</div>
            <span class="badge" onclick="toggleImportUrl('100',false,this)"><span>Select</span>Thin 100 <i
                    class='fa fa-plus'></i></span>
            <button class=" badge" onclick="toggleFullscreen(this)"> <i class="fa-solid fa-expand"></i></button>
            <button class=" badge" onclick="pasteText(this)"><i class="fa-solid fa-paste"></i></button>
            <button class=" badge" onclick="copyToClipboard(this)"><i class="fa-solid fa-copy"></i></button>
            <pre class="editable" contenteditable="true"
                style="font-family: 'Roboto', sans-serif;font-weight: 100;"></pre>

        </li>
        <li class="list-group-item p-0 border-0 align-items-center">
            <div class="badge" style="font-size: 14px;margin:0; float:none;background-color: #fff;color:#8a9094;">Thin
                100 Italic</div>
            <span class="badge" onclick="toggleImportUrl('1,100' ,true,this)"><span>Select</span> Thin 100 Italic <i
                    class='fa fa-plus'></i></span>
            <button class=" badge" onclick="toggleFullscreen(this)"> <i class="fa-solid fa-expand"></i></button>
            <button class=" badge" onclick="pasteText(this)"><i class="fa-solid fa-paste"></i></button>
            <button class=" badge" onclick="copyToClipboard(this)"><i class="fa-solid fa-copy"></i></button>
            <pre class="editable" contenteditable="true"
                style="font-style: italic; font-family: 'Roboto', sans-serif;font-weight: 100;"></pre>
        </li>
        <li class="list-group-item p-0 border-0 align-items-center">
            <div class="badge" style="font-size: 14px;margin:0; float:none;background-color: #fff;color:#8a9094;">Light
                300
            </div>
            <span class="badge" onclick="toggleImportUrl('300',false,this)"><span>Select</span> Light 300 <i
                    class='fa fa-plus'></i></span>
            <button class=" badge" onclick="toggleFullscreen(this)"> <i class="fa-solid fa-expand"></i></button>
            <button class=" badge" onclick="pasteText(this)"><i class="fa-solid fa-paste"></i></button>
            <button class=" badge" onclick="copyToClipboard(this)"><i class="fa-solid fa-copy"></i></button>
            <pre class="editable" contenteditable="true"
                style="font-family: 'Roboto', sans-serif;font-weight: 300;"></pre>
        </li>
        <li class="list-group-item p-0 border-0 align-items-center">
            <div class="badge" style="font-size: 14px;margin:0; float:none;background-color: #fff;color:#8a9094;">Light
                300 Italic
            </div>
            <span class="badge" onclick="toggleImportUrl('1,300' ,true,this)"><span>Select</span> Light 300 Italic <i
                    class='fa fa-plus'></i></span>
            <button class=" badge" onclick="toggleFullscreen(this)"> <i class="fa-solid fa-expand"></i></button>
            <button class=" badge" onclick="pasteText(this)"><i class="fa-solid fa-paste"></i></button>
            <button class=" badge" onclick="copyToClipboard(this)"><i class="fa-solid fa-copy"></i></button>
            <pre class="editable" contenteditable="true"
                style="font-family: 'Roboto', sans-serif;font-weight: 300;font-style: italic;"></pre>
        </li>
        <li class="list-group-item p-0 border-0 align-items-center">
            <div class="badge" style="font-size: 14px;margin:0; float:none;background-color: #fff;color:#8a9094;">
                Regular 400
            </div>
            <span class="badge" onclick="toggleImportUrl('400',false,this)"><span>Select</span> Regular 400 <i
                    class='fa fa-plus'></i></span>
            <button class=" badge" onclick="toggleFullscreen(this)"> <i class="fa-solid fa-expand"></i></button>
            <button class=" badge" onclick="pasteText(this)"><i class="fa-solid fa-paste"></i></button>
            <button class=" badge" onclick="copyToClipboard(this)"><i class="fa-solid fa-copy"></i></button>
            <pre class="editable" contenteditable="true"
                style="font-family: 'Roboto', sans-serif;font-weight: 400;"></pre>
        </li>
        <li class="list-group-item p-0 border-0 align-items-center">
            <div class="badge" style="font-size: 14px;margin:0; float:none;background-color: #fff;color:#8a9094;">
                Regular 400 Italic
            </div>
            <span class="badge" onclick="toggleImportUrl('1,400',true,this)"><span>Select</span> Regular 400 Italic <i
                    class='fa fa-plus'></i></span>
            <button class=" badge" onclick="toggleFullscreen(this)"> <i class="fa-solid fa-expand"></i></button>
            <button class=" badge" onclick="pasteText(this)"><i class="fa-solid fa-paste"></i></button>
            <button class=" badge" onclick="copyToClipboard(this)"><i class="fa-solid fa-copy"></i></button>
            <pre class="editable" contenteditable="true"
                style="font-family: 'Roboto', sans-serif;font-weight: 400;font-style: italic;"></pre>
        </li>
        <li class="list-group-item p-0 border-0 align-items-center">
            <div class="badge" style="font-size: 14px;margin:0; float:none;background-color: #fff;color:#8a9094;">Medium
                500
            </div>
            <span class="badge" onclick="toggleImportUrl('500',false,this)"><span>Select</span> Medium 500 <i
                    class='fa-solid fa-plus'></i></span>
            <button class=" badge" onclick="toggleFullscreen(this)"> <i class="fa-solid fa-expand"></i></button>
            <button class=" badge" onclick="pasteText(this)"><i class="fa-solid fa-paste"></i></button>
            <button class=" badge" onclick="copyToClipboard(this)"><i class="fa-solid fa-copy"></i></button>
            <pre class="editable" contenteditable="true"
                style=" font-family: 'Roboto', sans-serif;font-weight: 500;"></pre>
        </li>
        <li class="list-group-item p-0 border-0 align-items-center">
            <div class="badge" style="font-size: 14px;margin:0; float:none;background-color: #fff;color:#8a9094;">Medium
                500 Italic
            </div>
            <span class="badge" onclick="toggleImportUrl('1,500',true,this)"><span>Select</span> Medium 500 Italic <i
                    class='fa fa-plus'></i></span>
            <button class=" badge" onclick="toggleFullscreen(this)"> <i class="fa-solid fa-expand"></i></button>
            <button class=" badge" onclick="pasteText(this)"><i class="fa-solid fa-paste"></i></button>
            <button class=" badge" onclick="copyToClipboard(this)"><i class="fa-solid fa-copy"></i></button>
            <pre class="editable" contenteditable="true"
                style=" font-family: 'Roboto', sans-serif;font-weight: 500; font-style: italic;"></pre>
        </li>
        <li class="list-group-item p-0 border-0 align-items-center">
            <div class="badge" style="font-size: 14px;margin:0; float:none;background-color: #fff;color:#8a9094;">Bold
                700
            </div>
            <span class="badge" onclick="toggleImportUrl('700',false,this)"><span>Select</span> Bold 700 <i
                    class='fa fa-plus'></i></span>
            <button class=" badge" onclick="toggleFullscreen(this)"> <i class="fa-solid fa-expand"></i></button>
            <button class=" badge" onclick="pasteText(this)"><i class="fa-solid fa-paste"></i></button>
            <button class=" badge" onclick="copyToClipboard(this)"><i class="fa-solid fa-copy"></i></button>
            <pre class="editable" contenteditable="true"
                style=" font-family: 'Roboto', sans-serif;font-weight: 700;"></pre>
        </li>
        <li class="list-group-item p-0 border-0 align-items-center">
            <div class="badge" style="font-size: 14px;margin:0; float:none;background-color: #fff;color:#8a9094;">Bold
                700 Italic
            </div>
            <span class="badge" onclick="toggleImportUrl('1,700',true,this)"><span>Select</span> Bold 700 Italic <i
                    class='fa fa-plus'></i></span>
            <button class=" badge" onclick="toggleFullscreen(this)"> <i class="fa-solid fa-expand"></i></button>
            <button class=" badge" onclick="pasteText(this)"><i class="fa-solid fa-paste"></i></button>
            <button class=" badge" onclick="copyToClipboard(this)"><i class="fa-solid fa-copy"></i></button>
            <pre class="editable" contenteditable="true"
                style=" font-family: 'Roboto', sans-serif;font-weight: 700; font-style: italic;"></pre>
        </li>
        <li class="list-group-item p-0 border-0 align-items-center">
            <div class="badge" style="font-size: 14px;margin:0; float:none;background-color: #fff;color:#8a9094;">Black
                900
            </div>
            <span class="badge" onclick="toggleImportUrl('900',false,this)"><span>Select</span> Black 900 <i
                    class='fa fa-plus'></i></span>
            <button class=" badge" onclick="toggleFullscreen(this)"> <i class="fa-solid fa-expand"></i></button>
            <button class=" badge" onclick="pasteText(this)"><i class="fa-solid fa-paste"></i></button>
            <button class=" badge" onclick="copyToClipboard(this)"><i class="fa-solid fa-copy"></i></button>
            <pre class="editable" contenteditable="true"
                style=" font-family: 'Roboto', sans-serif;font-weight: 900;"></pre>
        </li>
        <li class="list-group-item p-0 border-0 align-items-center">
            <div class="badge" style="font-size: 14px;margin:0; float:none;background-color: #fff;color:#8a9094;">Black
                900 Italic
            </div>
            <span class="badge" onclick="toggleImportUrl('1,900',true,this)"><span>Select</span> Black 900 Italic <i
                    class='fa-solid fa-plus'></i></span>
            <button class=" badge" onclick="toggleFullscreen(this)"> <i class="fa-solid fa-expand"></i></button>
            <button class=" badge" onclick="pasteText(this)"><i class="fa-solid fa-paste"></i></button>
            <button class=" badge" onclick="copyToClipboard(this)"><i class="fa-solid fa-copy"></i></button>
            <pre class="editable" contenteditable="true"
                style=" font-family: 'Roboto', sans-serif;font-weight: 900; font-style: italic;"></pre>
        </li>
    </ul>

    <div class="controls-container">
        <div class="font-dropdown ">
            <button class=" font-dropdown-btn" id="dropdownBtn">
                <span id="selectedOption">Regular 400</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="16" height="16">
                    <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
            </button>
            <div class="font-dropdown-content">
                <a onclick="selectOption('Thin 100')">Thin 100</a>
                <a onclick="selectOption('Light 300')">Light 300</a>
                <a onclick="selectOption('Regular 400')">Regular 400</a>
                <a onclick="selectOption('Medium 500')">Medium 500</a>
                <a onclick="selectOption('Bold 700')">Bold 700</a>
                <a onclick="selectOption('Black 900')">Black 900</a>
            </div>
        </div>
        <div class="checkbox-container">
            <label class="custom-checkbox">
                <input type="checkbox" onclick="toggleItalic()">
                <div class="checkmark">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18">
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path d="M9 16.17L4.83 12l-1.42 1.41L9 18 21 6l-1.41-1.41L9 16.17z" />
                    </svg>
                </div>
            </label>
            <span style="margin-left: 10px;color:#8a9094;font-size:14px;">Italic</span>
        </div>
    </div>

    <div class="row">

        <div class="col-sm-6 mb-5">
            <div class="badge" style="color:#8a9094;"><span class="updateFontText">Regular 400</span> <span
                    class="isItalic"></span> at 48px
            </div>
            <div class="updateFontWeight" style="font-size:48px">Whereas a common understanding of these rights and
                freedoms is</div>
        </div>

        <div class="col-sm-6 mb-5">
            <div class="badge" style="color:#8a9094;"><span class="updateFontText">Regular 400</span> <span
                    class="isItalic"></span> at 21px
            </div>
            <div class="updateFontWeight" style="font-size: 21px;"> No one shall be subjected to arbitrary arrest,
                detention or exile. Everyone is entitled in full equality to
                a fair and
                public hearing by an independent and impartial tribunal, in the determination of his rights and
                obligations
                and of any
                criminal charge against him. No one shall be subjected to arbitrary interference with his privacy,
                family,
                home or
                correspondence, nor to attacks upon his honour and reputation. Everyone has the right to the protection
                of
                the law
                against such interference or attacks.</div>
        </div>
        <div class=" col-sm-6 mb-5">
            <div class="badge" style="color:#8a9094;"><span class="updateFontText">Regular 400</span> <span
                    class="isItalic"></span> at
                36px</div>
            <div class=" updateFontWeight" style="font-size: 36px;">
                No one shall be held in slavery or servitude;
                slavery and the slave trade shall be prohibited in all
                their
                forms.</div>
        </div>

        <div class="col-sm-6 mb-5 ">
            <div class="badge" style="color:#8a9094;"><span class="updateFontText">Regular 400</span> <span
                    class="isItalic"></span> at
                16px</div>
            <div class="updateFontWeight" style="font-size: 16px;">Everyone has the right to freedom of thought,
                conscience and religion; this right includes freedom to
                change
                his
                religion or belief, and freedom, either alone or in community with others and in public or private,
                to
                manifest his
                religion or belief in teaching, practice, worship and observance. Everyone has the right to freedom
                of
                opinion and
                expression; this right includes freedom to hold opinions without interference and to seek, receive
                and
                impart
                information and ideas through any media and regardless of frontiers. Everyone has the right to rest
                and
                leisure,
                including reasonable limitation of working hours and periodic holidays with pay.</div>

        </div>
        <div class="col-sm-6 mb-5">
            <div class="badge" style="color:#8a9094;"><span class="updateFontText">Regular 400</span> <span
                    class="isItalic"></span> at
                32px</div>
            <div class="updateFontWeight" style="font-size:32px;">
                Everyone has the right to an effective remedy by the competent national tribunals for acts violating
                the
                fundamental
                rights granted him by the constitution or by law
            </div>

        </div>

    </div>
    <!-- Code Mirror -->
    <div class="list-group-item">
        <button class="btn  editor-fullscren-btn"  onclick="toggleFullscreen(this)"> <i
                class="fa-solid fa-expand"></i></button>
        <div class="row m-0">
            <div class="col-md-6 p-0">
                <textarea id="font-codemirror"></textarea>
            </div>
            <div class="col-md-6 p-0">
                <iframe id="outputFrame" ></iframe>
            </div>
        </div>
    </div>

    <!-- Sidebar offcanvas -->
    <div class="offcanvas offcanvas-end border-0" id="font-offcanvas"
        style='max-width:240px;box-shadow: rgba(0, 0, 0, 0.2) 0px 2px 4px -1px, rgba(0, 0, 0, 0.14) 0px 4px 5px 0px, rgba(0, 0, 0, 0.12) 0px 1px 10px 0px'>
        <div class="offcanvas-header">
            <h1 class="offcanvas-title"></h1>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <p> To embed a font, copy the code into the head of your html</p>

            <pre class="language-markup no-line-numbers"><code id="styleCode" class="language-markup">
&lt;link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet"&gt;</code></pre>

            <p> Import</p>
            <pre class="language-css no-line-numbers">
  <code id="importCode">&lt;style&gt;
@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
&lt;/style&gt;</code>
</pre>
            <p>CSS rules to specify families</p>
            <pre
                class="language-css no-line-numbers"><code  class="language-css">font-family: 'Roboto', sans-serif;</code></pre>
        </div>
    </div>

    <h3>Conclusion of Roboto Font Family</h3>
    <p>In conclusion, the **Roboto font family** is an **iconic and widely recognized** typeface,
        created by **In conclusion, the **Roboto font family** is an **iconic and widely
        recognized** typeface, created by **Christian Robertson** and released by **Google** in
        2011. Its **clean and modern design** offers **clarity and readability** across various
        platforms and devices.
        With **multiple weights** and **extensive character support**, including Latin, Cyrillic,
        Greek, and Vietnamese, Roboto ensures **versatility and international usability**.
        **Ample spacing, balanced proportions**, and **legible letterforms** make Roboto
        suitable for various sizes and resolutions.
        As part of the **Google Fonts library**
        , Roboto has gained **global popularity** and is
        available under the **permissive Apache License**, allowing for **extensive usage and
        modification**.
    </p>
    <h3>Roboto Font Family FAQs</h3>
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Question #1
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate
                    the
                    <code>.accordion-flush</code> class. This is the first item's accordion body.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Question #2
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate
                    the
                    <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine
                    this
                    being
                    filled with some actual content.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Question #3
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate
                    the
                    <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more
                    exciting
                    happening here in terms of content, but just filling up the space to make it look, at least at
                    first
                    glance, a bit more representative of how this would look in a real-world application.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    Question #4
                </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate
                    the
                    <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more
                    exciting
                    happening here in terms of content, but just filling up the space to make it look, at least at
                    first
                    glance, a bit more representative of how this would look in a real-world application.
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        // close the offcanvas on button click
        $("#font-offcanvas").offcanvas({ backdrop: false, });
    });
   

</script>