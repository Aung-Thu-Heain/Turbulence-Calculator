<?php
/*
Plugin Name:  Turbulence Calculator
Description: To embed turbulence calculator with short-code (turbulence-calculator)
Author: Aung Thu Heain
Version: 1.0
*/


add_shortcode("turbulence-calculator", "calculate");

function calculate()
{
    return 
    '
    <form id="turbulence_form" name="Turbulent Properties">
    <table cellspacing="5">
      <tbody>
        <tr>
          <td colspan="4">
            <hr />
            <p>
              <span
                style="
                  font-family: arial, helvetica, sans-serif;
                  font-size: x-large;
                  line-height: 1.2;
                " 
                ><strong>Properties - Input values <br /></strong
              ></span>
            </p>
          </td>
        </tr>
        <tr>
          <td style="width: 250px">Freestream velocity</td>
          <td style="width: 55px">
            <span
              class="MathJax_Preview"
              style="color: inherit; display: none"
            ></span
            ><span
              id="MathJax-Element-1-Frame"
              class="mjx-chtml MathJax_CHTML"
              tabindex="0"
              data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>U</mi><mrow class="MJX-TeXAtom-ORD"><mi mathvariant="normal">&amp;#x221E;</mi></mrow></msub></math>\'
              role="presentation"
              style="font-size: 117%; position: relative"
              >

              <span id="MJXc-Node-1" class="mjx-math" aria-hidden="true"
                ><span id="MJXc-Node-2" class="mjx-mrow"
                  ><span id="MJXc-Node-3" class="mjx-msubsup"
                    ><span class="mjx-base" style="margin-right: -0.084em"
                      ><span id="MJXc-Node-4" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.464em;
                            padding-bottom: 0.332em;
                            padding-right: 0.084em;
                          "
                          >U</span
                        ></span
                      ></span
                    ><span
                      class="mjx-sub"
                      style="
                        font-size: 70.7%;
                        vertical-align: -0.212em;
                        padding-right: 0.071em;
                      "
                      ><span id="MJXc-Node-5" class="mjx-texatom" style=""
                        ><span id="MJXc-Node-6" class="mjx-mrow"
                          ><span id="MJXc-Node-7" class="mjx-mi"
                            ><span
                              class="mjx-char MJXc-TeX-main-R"
                              style="
                                padding-top: 0.135em;
                                padding-bottom: 0.332em;
                              "
                              >∞</span
                            ></span
                          ></span
                        ></span
                      ></span
                    ></span
                  ></span
                ></span
              >
              
              <span class="MJX_Assistive_MathML" role="presentation"
                ><math xmlns="http://www.w3.org/1998/Math/MathML"
                  ><msub
                    ><mi>U</mi
                    ><mrow class="MJX-TeXAtom-ORD"
                      ><mi mathvariant="normal">∞</mi></mrow
                    ></msub
                  ></math
                ></span
              ></span
            >
            <script type="math/tex" id="MathJax-Element-1">
              U_{\infty}
            </script>
          </td>
          <td style="width: 130px">
            <input
              id="u_freestream"
              type="text"
              name="u_freestream"
              value=""
              size="16"
              style="
                background-color: rgb(255, 255, 255);
                border: 1px solid lightgrey;
              "
            />
          </td>
          <td>
            <span
              class="MathJax_Preview"
              style="color: inherit; display: none"
            ></span
            ><span
              id="MathJax-Element-2-Frame"
              class="mjx-chtml MathJax_CHTML"
              tabindex="0"
              data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi><mrow class="MJX-TeXAtom-ORD"><mo>/</mo></mrow><mi>s</mi></math>\'
              role="presentation"
              style="font-size: 117%; position: relative"
              >
              
              <span id="MJXc-Node-8" class="mjx-math" aria-hidden="true"
                ><span id="MJXc-Node-9" class="mjx-mrow"
                  ><span id="MJXc-Node-10" class="mjx-mi"
                    ><span
                      class="mjx-char MJXc-TeX-math-I"
                      style="padding-top: 0.201em; padding-bottom: 0.266em"
                      >m</span
                    ></span
                  ><span id="MJXc-Node-11" class="mjx-texatom"
                    ><span id="MJXc-Node-12" class="mjx-mrow"
                      ><span id="MJXc-Node-13" class="mjx-mo"
                        ><span
                          class="mjx-char MJXc-TeX-main-R"
                          style="
                            padding-top: 0.464em;
                            padding-bottom: 0.595em;
                          "
                          >/</span
                        ></span
                      ></span
                    ></span
                  ><span id="MJXc-Node-14" class="mjx-mi"
                    ><span
                      class="mjx-char MJXc-TeX-math-I"
                      style="padding-top: 0.201em; padding-bottom: 0.266em"
                      >s</span
                    ></span
                  ></span
                ></span
              >
              
              <span class="MJX_Assistive_MathML" role="presentation"
                ><math xmlns="http://www.w3.org/1998/Math/MathML"
                  ><mi>m</mi><mrow class="MJX-TeXAtom-ORD"><mo>/</mo></mrow
                  ><mi>s</mi></math
                ></span
              ></span
            >
            <script type="math/tex" id="MathJax-Element-2">
              m/s
            </script>
          </td>
        </tr>
        <tr>
          <td>Turbulence kinetic energy</td>
          <td>
            <span
              class="MathJax_Preview"
              style="color: inherit; display: none"
            ></span
            ><span
              id="MathJax-Element-3-Frame"
              class="mjx-chtml MathJax_CHTML"
              tabindex="0"
              data-mathml= \'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&amp;#x03BA;</mi></math> \'
              role="presentation"
              style="font-size: 117%; position: relative"
              ><span id="MJXc-Node-15" class="mjx-math" aria-hidden="true"
                ><span id="MJXc-Node-16" class="mjx-mrow"
                  ><span id="MJXc-Node-17" class="mjx-mi"
                    ><span
                      class="mjx-char MJXc-TeX-math-I"
                      style="padding-top: 0.201em; padding-bottom: 0.266em"
                      >κ</span
                    ></span
                  ></span
                ></span
              ><span class="MJX_Assistive_MathML" role="presentation"
                ><math xmlns="http://www.w3.org/1998/Math/MathML"
                  ><mi>κ</mi></math
                ></span
              ></span
            >
            <script type="math/tex" id="MathJax-Element-3">
              \kappa
            </script>
          </td> 
          <td>
            <input
              id="k"
              type="text"
              name="k"
              value=""
              size="16"
              style="
                background-color: rgb(255, 255, 255);
                border: 1px solid lightgrey;
              "
            />
          </td>
          <td>
            <span
              class="MathJax_Preview"
              style="color: inherit; display: none"
            ></span
            ><span
              id="MathJax-Element-4-Frame"
              class="mjx-chtml MathJax_CHTML"
              tabindex="0"
              data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>m</mi><mn>2</mn></msup><mrow class="MJX-TeXAtom-ORD"><mo>/</mo></mrow><msup><mi>s</mi><mn>2</mn></msup></math>\'
              role="presentation"
              style="font-size: 117%; position: relative"
              ><span id="MJXc-Node-18" class="mjx-math" aria-hidden="true"
                ><span id="MJXc-Node-19" class="mjx-mrow"
                  ><span id="MJXc-Node-20" class="mjx-msubsup"
                    ><span class="mjx-base"
                      ><span id="MJXc-Node-21" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                          "
                          >m</span
                        ></span
                      ></span
                    ><span
                      class="mjx-sup"
                      style="
                        font-size: 70.7%;
                        vertical-align: 0.513em;
                        padding-left: 0px;
                        padding-right: 0.071em;
                      "
                      ><span id="MJXc-Node-22" class="mjx-mn" style=""
                        ><span
                          class="mjx-char MJXc-TeX-main-R"
                          style="
                            padding-top: 0.398em;
                            padding-bottom: 0.332em;
                          "
                          >2</span
                        ></span
                      ></span
                    ></span
                  ><span id="MJXc-Node-23" class="mjx-texatom"
                    ><span id="MJXc-Node-24" class="mjx-mrow"
                      ><span id="MJXc-Node-25" class="mjx-mo"
                        ><span
                          class="mjx-char MJXc-TeX-main-R"
                          style="
                            padding-top: 0.464em;
                            padding-bottom: 0.595em;
                          "
                          >/</span
                        ></span
                      ></span
                    ></span
                  ><span id="MJXc-Node-26" class="mjx-msubsup"
                    ><span class="mjx-base"
                      ><span id="MJXc-Node-27" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                          "
                          >s</span
                        ></span
                      ></span
                    ><span
                      class="mjx-sup"
                      style="
                        font-size: 70.7%;
                        vertical-align: 0.513em;
                        padding-left: 0px;
                        padding-right: 0.071em;
                      "
                      ><span id="MJXc-Node-28" class="mjx-mn" style=""
                        ><span
                          class="mjx-char MJXc-TeX-main-R"
                          style="
                            padding-top: 0.398em;
                            padding-bottom: 0.332em;
                          "
                          >2</span
                        ></span
                      ></span
                    ></span
                  ></span
                ></span
              ><span class="MJX_Assistive_MathML" role="presentation"
                ><math xmlns="http://www.w3.org/1998/Math/MathML"
                  ><msup><mi>m</mi><mn>2</mn></msup
                  ><mrow class="MJX-TeXAtom-ORD"><mo>/</mo></mrow
                  ><msup><mi>s</mi><mn>2</mn></msup></math
                ></span
              ></span
            >
            <script type="math/tex" id="MathJax-Element-4">
              m^2/s^2
            </script>
          </td>
        </tr>
        <tr>
          <td>Turbulence dissipation</td>
          <td>
            <span
              class="MathJax_Preview"
              style="color: inherit; display: none"
            ></span
            ><span
              id="MathJax-Element-5-Frame"
              class="mjx-chtml MathJax_CHTML"
              tabindex="0"
              data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&amp;#x03F5;</mi></math>\'
              role="presentation"
              style="font-size: 117%; position: relative"
              ><span id="MJXc-Node-29" class="mjx-math" aria-hidden="true"
                ><span id="MJXc-Node-30" class="mjx-mrow"
                  ><span id="MJXc-Node-31" class="mjx-mi"
                    ><span
                      class="mjx-char MJXc-TeX-math-I"
                      style="padding-top: 0.201em; padding-bottom: 0.266em"
                      >ϵ</span
                    ></span
                  ></span
                ></span
              ><span class="MJX_Assistive_MathML" role="presentation"
                ><math xmlns="http://www.w3.org/1998/Math/MathML"
                  ><mi>ϵ</mi></math
                ></span
              ></span
            >
            <script type="math/tex" id="MathJax-Element-5">
              \epsilon
            </script>
          </td>
          <td>
            <input
              id="epsilon"
              type="text"
              name="epsilon"
              value=""
              size="16"
              style="
                background-color: rgb(255, 255, 255);
                border: 1px solid lightgrey;
              "
            />
          </td>
          <td>
            <span
              class="MathJax_Preview"
              style="color: inherit; display: none"
            ></span
            ><span
              id="MathJax-Element-6-Frame"
              class="mjx-chtml MathJax_CHTML"
              tabindex="0"
              data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>m</mi><mn>2</mn></msup><mrow class="MJX-TeXAtom-ORD"><mo>/</mo></mrow><msup><mi>s</mi><mn>3</mn></msup></math>\'
              role="presentation"
              style="font-size: 117%; position: relative"
              ><span id="MJXc-Node-32" class="mjx-math" aria-hidden="true"
                ><span id="MJXc-Node-33" class="mjx-mrow"
                  ><span id="MJXc-Node-34" class="mjx-msubsup"
                    ><span class="mjx-base"
                      ><span id="MJXc-Node-35" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                          "
                          >m</span
                        ></span
                      ></span
                    ><span
                      class="mjx-sup"
                      style="
                        font-size: 70.7%;
                        vertical-align: 0.513em;
                        padding-left: 0px;
                        padding-right: 0.071em;
                      "
                      ><span id="MJXc-Node-36" class="mjx-mn" style=""
                        ><span
                          class="mjx-char MJXc-TeX-main-R"
                          style="
                            padding-top: 0.398em;
                            padding-bottom: 0.332em;
                          "
                          >2</span
                        ></span
                      ></span
                    ></span
                  ><span id="MJXc-Node-37" class="mjx-texatom"
                    ><span id="MJXc-Node-38" class="mjx-mrow"
                      ><span id="MJXc-Node-39" class="mjx-mo"
                        ><span
                          class="mjx-char MJXc-TeX-main-R"
                          style="
                            padding-top: 0.464em;
                            padding-bottom: 0.595em;
                          "
                          >/</span
                        ></span
                      ></span
                    ></span
                  ><span id="MJXc-Node-40" class="mjx-msubsup"
                    ><span class="mjx-base"
                      ><span id="MJXc-Node-41" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                          "
                          >s</span
                        ></span
                      ></span
                    ><span
                      class="mjx-sup"
                      style="
                        font-size: 70.7%;
                        vertical-align: 0.513em;
                        padding-left: 0px;
                        padding-right: 0.071em;
                      "
                      ><span id="MJXc-Node-42" class="mjx-mn" style=""
                        ><span
                          class="mjx-char MJXc-TeX-main-R"
                          style="
                            padding-top: 0.398em;
                            padding-bottom: 0.332em;
                          "
                          >3</span
                        ></span
                      ></span
                    ></span
                  ></span
                ></span
              ><span class="MJX_Assistive_MathML" role="presentation"
                ><math xmlns="http://www.w3.org/1998/Math/MathML"
                  ><msup><mi>m</mi><mn>2</mn></msup
                  ><mrow class="MJX-TeXAtom-ORD"><mo>/</mo></mrow
                  ><msup><mi>s</mi><mn>3</mn></msup></math
                ></span
              ></span
            >
            <script type="math/tex" id="MathJax-Element-6">
              m^2/s^3
            </script>
          </td>
        </tr>
        <tr>
          <td>Specific turbulence dissipation</td>
          <td>
            <span
              class="MathJax_Preview"
              style="color: inherit; display: none"
            ></span
            ><span
              id="MathJax-Element-7-Frame"
              class="mjx-chtml MathJax_CHTML"
              tabindex="0"
              data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&amp;#x03C9;</mi></math>\'
              role="presentation"
              style="font-size: 117%; position: relative"
              ><span id="MJXc-Node-43" class="mjx-math" aria-hidden="true"
                ><span id="MJXc-Node-44" class="mjx-mrow"
                  ><span id="MJXc-Node-45" class="mjx-mi"
                    ><span
                      class="mjx-char MJXc-TeX-math-I"
                      style="padding-top: 0.201em; padding-bottom: 0.266em"
                      >ω</span
                    ></span
                  ></span
                ></span
              ><span class="MJX_Assistive_MathML" role="presentation"
                ><math xmlns="http://www.w3.org/1998/Math/MathML"
                  ><mi>ω</mi></math
                ></span
              ></span
            >
            <script type="math/tex" id="MathJax-Element-7">
              \omega
            </script>
          </td>
          <td>
            <input
              id="omega"
              type="text"
              name="omega"
              value=""
              size="16"
              style="
                background-color: rgb(255, 255, 255);
                border: 1px solid lightgrey;
              "
            />
          </td>
          <td>
            <span
              class="MathJax_Preview"
              style="color: inherit; display: none"
            ></span
            ><span
              id="MathJax-Element-8-Frame"
              class="mjx-chtml MathJax_CHTML"
              tabindex="0"
              data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>1</mn><mrow class="MJX-TeXAtom-ORD"><mo>/</mo></mrow><mi>s</mi></math>\'
              role="presentation"
              style="font-size: 117%; position: relative"
              ><span id="MJXc-Node-46" class="mjx-math" aria-hidden="true"
                ><span id="MJXc-Node-47" class="mjx-mrow"
                  ><span id="MJXc-Node-48" class="mjx-mn"
                    ><span
                      class="mjx-char MJXc-TeX-main-R"
                      style="padding-top: 0.398em; padding-bottom: 0.332em"
                      >1</span
                    ></span
                  ><span id="MJXc-Node-49" class="mjx-texatom"
                    ><span id="MJXc-Node-50" class="mjx-mrow"
                      ><span id="MJXc-Node-51" class="mjx-mo"
                        ><span
                          class="mjx-char MJXc-TeX-main-R"
                          style="
                            padding-top: 0.464em;
                            padding-bottom: 0.595em;
                          "
                          >/</span
                        ></span
                      ></span
                    ></span
                  ><span id="MJXc-Node-52" class="mjx-mi"
                    ><span
                      class="mjx-char MJXc-TeX-math-I"
                      style="padding-top: 0.201em; padding-bottom: 0.266em"
                      >s</span
                    ></span
                  ></span
                ></span
              ><span class="MJX_Assistive_MathML" role="presentation"
                ><math xmlns="http://www.w3.org/1998/Math/MathML"
                  ><mn>1</mn><mrow class="MJX-TeXAtom-ORD"><mo>/</mo></mrow
                  ><mi>s</mi></math
                ></span
              ></span
            >
            <script type="math/tex" id="MathJax-Element-8">
              1/s
            </script>
          </td>
        </tr>
        <tr>
          <td>Turbulence intensity</td>
          <td>
            <span
              class="MathJax_Preview"
              style="color: inherit; display: none"
            ></span
            ><span
              id="MathJax-Element-9-Frame"
              class="mjx-chtml MathJax_CHTML"
              tabindex="0"
              data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>T</mi><mi>u</mi></math>\'
              role="presentation"
              style="font-size: 117%; position: relative"
              ><span id="MJXc-Node-53" class="mjx-math" aria-hidden="true"
                ><span id="MJXc-Node-54" class="mjx-mrow"
                  ><span id="MJXc-Node-55" class="mjx-mi"
                    ><span
                      class="mjx-char MJXc-TeX-math-I"
                      style="
                        padding-top: 0.464em;
                        padding-bottom: 0.266em;
                        padding-right: 0.12em;
                      "
                      >T</span
                    ></span
                  ><span id="MJXc-Node-56" class="mjx-mi"
                    ><span
                      class="mjx-char MJXc-TeX-math-I"
                      style="padding-top: 0.201em; padding-bottom: 0.266em"
                      >u</span
                    ></span
                  ></span
                ></span
              ><span class="MJX_Assistive_MathML" role="presentation"
                ><math xmlns="http://www.w3.org/1998/Math/MathML"
                  ><mi>T</mi><mi>u</mi></math
                ></span
              ></span
            >
            <script type="math/tex" id="MathJax-Element-9">
              Tu
            </script>
          </td>
          <td>
            <input
              id="Tu"
              type="text"
              name="Tu"
              value=""
              size="16"
              style="
                background-color: rgb(255, 255, 255);
                border: 1px solid lightgrey;
              "
            />
          </td>
          <td>
            <span
              class="MathJax_Preview"
              style="color: inherit; display: none"
            ></span
            ><span
              id="MathJax-Element-10-Frame"
              class="mjx-chtml MathJax_CHTML"
              tabindex="0"
              data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi mathvariant="normal">&amp;#x0025;</mi></math>\'
              role="presentation"
              style="font-size: 117%; position: relative"
              ><span id="MJXc-Node-57" class="mjx-math" aria-hidden="true"
                ><span id="MJXc-Node-58" class="mjx-mrow"
                  ><span id="MJXc-Node-59" class="mjx-mi"
                    ><span
                      class="mjx-char MJXc-TeX-main-R"
                      style="padding-top: 0.464em; padding-bottom: 0.398em"
                      >%</span
                    ></span
                  ></span
                ></span
              ><span class="MJX_Assistive_MathML" role="presentation"
                ><math xmlns="http://www.w3.org/1998/Math/MathML"
                  ><mi mathvariant="normal">%</mi></math
                ></span
              ></span
            >
            <script type="math/tex" id="MathJax-Element-10">
              \%
            </script>
          </td>
        </tr>
        <tr>
          <td>Turbulence length scale</td>
          <td>
            <span
              class="MathJax_Preview"
              style="color: inherit; display: none"
            ></span
            ><span
              id="MathJax-Element-11-Frame"
              class="mjx-chtml MathJax_CHTML"
              tabindex="0"
              data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>T</mi><msub><mi>u</mi><mi>L</mi></msub></math>\'
              role="presentation"
              style="font-size: 117%; position: relative"
              ><span id="MJXc-Node-60" class="mjx-math" aria-hidden="true"
                ><span id="MJXc-Node-61" class="mjx-mrow"
                  ><span id="MJXc-Node-62" class="mjx-mi"
                    ><span
                      class="mjx-char MJXc-TeX-math-I"
                      style="
                        padding-top: 0.464em;
                        padding-bottom: 0.266em;
                        padding-right: 0.12em;
                      "
                      >T</span
                    ></span
                  ><span id="MJXc-Node-63" class="mjx-msubsup"
                    ><span class="mjx-base"
                      ><span id="MJXc-Node-64" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                          "
                          >u</span
                        ></span
                      ></span
                    ><span
                      class="mjx-sub"
                      style="
                        font-size: 70.7%;
                        vertical-align: -0.212em;
                        padding-right: 0.071em;
                      "
                      ><span id="MJXc-Node-65" class="mjx-mi" style=""
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.464em;
                            padding-bottom: 0.266em;
                          "
                          >L</span
                        ></span
                      ></span
                    ></span
                  ></span
                ></span
              ><span class="MJX_Assistive_MathML" role="presentation"
                ><math xmlns="http://www.w3.org/1998/Math/MathML"
                  ><mi>T</mi><msub><mi>u</mi><mi>L</mi></msub></math
                ></span
              ></span
            >
            <script type="math/tex" id="MathJax-Element-11">
              Tu_L
            </script>
          </td>
          <td>
            <input
              id="Tu_L"
              type="text"
              name="Tu_L"
              value=""
              size="16"
              style="
                background-color: rgb(255, 255, 255);
                border: 1px solid lightgrey;
              "
            />
          </td>
          <td>
            <span
              class="MathJax_Preview"
              style="color: inherit; display: none"
            ></span
            ><span
              id="MathJax-Element-12-Frame"
              class="mjx-chtml MathJax_CHTML"
              tabindex="0"
              data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi></math>\'
              role="presentation"
              style="font-size: 117%; position: relative"
              ><span id="MJXc-Node-66" class="mjx-math" aria-hidden="true"
                ><span id="MJXc-Node-67" class="mjx-mrow"
                  ><span id="MJXc-Node-68" class="mjx-mi"
                    ><span
                      class="mjx-char MJXc-TeX-math-I"
                      style="padding-top: 0.201em; padding-bottom: 0.266em"
                      >m</span
                    ></span
                  ></span
                ></span
              ><span class="MJX_Assistive_MathML" role="presentation"
                ><math xmlns="http://www.w3.org/1998/Math/MathML"
                  ><mi>m</mi></math
                ></span
              ></span
            >
            <script type="math/tex" id="MathJax-Element-12">
              m
            </script>
          </td>
        </tr>
        <tr>
          <td>Kinematic viscosity</td>
          <td>
            <span
              class="MathJax_Preview"
              style="color: inherit; display: none"
            ></span
            ><span
              id="MathJax-Element-13-Frame"
              class="mjx-chtml MathJax_CHTML"
              tabindex="0"
              data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&amp;#x03BD;</mi></math>\'
              role="presentation"
              style="font-size: 117%; position: relative"
              ><span id="MJXc-Node-69" class="mjx-math" aria-hidden="true"
                ><span id="MJXc-Node-70" class="mjx-mrow"
                  ><span id="MJXc-Node-71" class="mjx-mi"
                    ><span
                      class="mjx-char MJXc-TeX-math-I"
                      style="
                        padding-top: 0.201em;
                        padding-bottom: 0.266em;
                        padding-right: 0.036em;
                      "
                      >ν</span
                    ></span
                  ></span
                ></span
              ><span class="MJX_Assistive_MathML" role="presentation"
                ><math xmlns="http://www.w3.org/1998/Math/MathML"
                  ><mi>ν</mi></math
                ></span
              ></span
            >
            <script type="math/tex" id="MathJax-Element-13">
              \nu
            </script>
          </td>
          <td>
            <input
              id="nu"
              type="text"
              name="nu"
              value="1.5e-05"
              size="16"
              style="
                background-color: rgb(255, 255, 255);
                border: 1px solid lightgrey;
              "
            />
          </td>
          <td>
            <span
              class="MathJax_Preview"
              style="color: inherit; display: none"
            ></span
            ><span
              id="MathJax-Element-14-Frame"
              class="mjx-chtml MathJax_CHTML"
              tabindex="0"
              data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>m</mi><mn>2</mn></msup><mrow class="MJX-TeXAtom-ORD"><mo>/</mo></mrow><mi>s</mi></math>\'
              role="presentation"
              style="font-size: 117%; position: relative"
              ><span id="MJXc-Node-72" class="mjx-math" aria-hidden="true"
                ><span id="MJXc-Node-73" class="mjx-mrow"
                  ><span id="MJXc-Node-74" class="mjx-msubsup"
                    ><span class="mjx-base"
                      ><span id="MJXc-Node-75" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                          "
                          >m</span
                        ></span
                      ></span
                    ><span
                      class="mjx-sup"
                      style="
                        font-size: 70.7%;
                        vertical-align: 0.513em;
                        padding-left: 0px;
                        padding-right: 0.071em;
                      "
                      ><span id="MJXc-Node-76" class="mjx-mn" style=""
                        ><span
                          class="mjx-char MJXc-TeX-main-R"
                          style="
                            padding-top: 0.398em;
                            padding-bottom: 0.332em;
                          "
                          >2</span
                        ></span
                      ></span
                    ></span
                  ><span id="MJXc-Node-77" class="mjx-texatom"
                    ><span id="MJXc-Node-78" class="mjx-mrow"
                      ><span id="MJXc-Node-79" class="mjx-mo"
                        ><span
                          class="mjx-char MJXc-TeX-main-R"
                          style="
                            padding-top: 0.464em;
                            padding-bottom: 0.595em;
                          "
                          >/</span
                        ></span
                      ></span
                    ></span
                  ><span id="MJXc-Node-80" class="mjx-mi"
                    ><span
                      class="mjx-char MJXc-TeX-math-I"
                      style="padding-top: 0.201em; padding-bottom: 0.266em"
                      >s</span
                    ></span
                  ></span
                ></span
              ><span class="MJX_Assistive_MathML" role="presentation"
                ><math xmlns="http://www.w3.org/1998/Math/MathML"
                  ><msup><mi>m</mi><mn>2</mn></msup
                  ><mrow class="MJX-TeXAtom-ORD"><mo>/</mo></mrow
                  ><mi>s</mi></math
                ></span
              ></span
            >
            <script type="math/tex" id="MathJax-Element-14">
              m^2/s
            </script>
            *
          </td>
        </tr>
        <tr>
          <td>Eddy viscosity ratio</td>
          <td>
            <span
              class="MathJax_Preview"
              style="color: inherit; display: none"
            ></span
            ><span
              id="MathJax-Element-15-Frame"
              class="mjx-chtml MathJax_CHTML"
              tabindex="0"
              data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>&amp;#x03BC;</mi><mi>t</mi></msub><mrow class="MJX-TeXAtom-ORD"><mo>/</mo></mrow><mi>&amp;#x03BC;</mi></math>\'
              role="presentation"
              style="font-size: 117%; position: relative"
              ><span id="MJXc-Node-81" class="mjx-math" aria-hidden="true"
                ><span id="MJXc-Node-82" class="mjx-mrow"
                  ><span id="MJXc-Node-83" class="mjx-msubsup"
                    ><span class="mjx-base"
                      ><span id="MJXc-Node-84" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.464em;
                          "
                          >μ</span
                        ></span
                      ></span
                    ><span
                      class="mjx-sub"
                      style="
                        font-size: 70.7%;
                        vertical-align: -0.212em;
                        padding-right: 0.071em;
                      "
                      ><span id="MJXc-Node-85" class="mjx-mi" style=""
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.398em;
                            padding-bottom: 0.266em;
                          "
                          >t</span
                        ></span
                      ></span
                    ></span
                  ><span id="MJXc-Node-86" class="mjx-texatom"
                    ><span id="MJXc-Node-87" class="mjx-mrow"
                      ><span id="MJXc-Node-88" class="mjx-mo"
                        ><span
                          class="mjx-char MJXc-TeX-main-R"
                          style="
                            padding-top: 0.464em;
                            padding-bottom: 0.595em;
                          "
                          >/</span
                        ></span
                      ></span
                    ></span
                  ><span id="MJXc-Node-89" class="mjx-mi"
                    ><span
                      class="mjx-char MJXc-TeX-math-I"
                      style="padding-top: 0.201em; padding-bottom: 0.464em"
                      >μ</span
                    ></span
                  ></span
                ></span
              ><span class="MJX_Assistive_MathML" role="presentation"
                ><math xmlns="http://www.w3.org/1998/Math/MathML"
                  ><msub><mi>μ</mi><mi>t</mi></msub
                  ><mrow class="MJX-TeXAtom-ORD"><mo>/</mo></mrow
                  ><mi>μ</mi></math
                ></span
              ></span
            >
            <script type="math/tex" id="MathJax-Element-15">
              \mu_t / \mu
            </script>
          </td>
          <td>
            <input
              id="eddy_viscosity_ratio"
              type="text"
              name="eddy_viscosity_ratio"
              value=""
              size="16"
              style="
                background-color: rgb(255, 255, 255);
                border: 1px solid lightgrey;
              "
            />
          </td>
          <td>[]</td>
        </tr>
        <tr>
          <td style="height: 0px" colspan="4" align="left">&nbsp;</td>
        </tr>
        <tr>
          <td style="height: 30px" colspan="4" align="left">
            <input
              class="button button2 button3"
              onclick="convert(this.form)"
              type="text"
              value="Compute"
            />
            <input
              class="button button2 button3"
              onclick="resetForm(this.form)"
              type="text"
              value="Reset values"
            />
          </td>
        </tr>
        <tr>
          <td style="height: 0px" colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="4">
            <p
              style="
                border: 1px solid #bce8f1;
                border-radius: 5px;
                background-color: #d9edf7;
                padding-top: 10px;
                padding-bottom: 10px;
                padding-left: 10px;
                font-family: arial, helvetica, sans-serif;
                font-size: small;
                color: #31708f;
                width: 60%;
              "
            >
              * Kinematic viscosity at room temperature:<br />
              Air:
              <span
                class="MathJax_Preview"
                style="color: inherit; display: none"
              ></span
              ><span
                id="MathJax-Element-16-Frame"
                class="mjx-chtml MathJax_CHTML"
                tabindex="0"
                data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>1.5</mn><mrow class="MJX-TeXAtom-ORD"><mo>&amp;#x2212;</mo><mn>5</mn></mrow></msup></math>\'
                role="presentation"
                style="font-size: 117%; position: relative"
                ><span id="MJXc-Node-90" class="mjx-math" aria-hidden="true"
                  ><span id="MJXc-Node-91" class="mjx-mrow"
                    ><span id="MJXc-Node-92" class="mjx-msubsup"
                      ><span class="mjx-base"
                        ><span id="MJXc-Node-93" class="mjx-mn"
                          ><span
                            class="mjx-char MJXc-TeX-main-R"
                            style="
                              padding-top: 0.398em;
                              padding-bottom: 0.332em;
                            "
                            >1.5</span
                          ></span
                        ></span
                      ><span
                        class="mjx-sup"
                        style="
                          font-size: 70.7%;
                          vertical-align: 0.591em;
                          padding-left: 0px;
                          padding-right: 0.071em;
                        "
                        ><span
                          id="MJXc-Node-94"
                          class="mjx-texatom"
                          style=""
                          ><span id="MJXc-Node-95" class="mjx-mrow"
                            ><span id="MJXc-Node-96" class="mjx-mo"
                              ><span
                                class="mjx-char MJXc-TeX-main-R"
                                style="
                                  padding-top: 0.266em;
                                  padding-bottom: 0.398em;
                                "
                                >−</span
                              ></span
                            ><span id="MJXc-Node-97" class="mjx-mn"
                              ><span
                                class="mjx-char MJXc-TeX-main-R"
                                style="
                                  padding-top: 0.398em;
                                  padding-bottom: 0.332em;
                                "
                                >5</span
                              ></span
                            ></span
                          ></span
                        ></span
                      ></span
                    ></span
                  ></span
                ><span class="MJX_Assistive_MathML" role="presentation"
                  ><math xmlns="http://www.w3.org/1998/Math/MathML"
                    ><msup
                      ><mn>1.5</mn
                      ><mrow class="MJX-TeXAtom-ORD"
                        ><mo>−</mo><mn>5</mn></mrow
                      ></msup
                    ></math
                  ></span
                ></span
              >
              <script type="math/tex" id="MathJax-Element-16">
                1.5^{-5}
              </script>
              - Water:
              <span
                class="MathJax_Preview"
                style="color: inherit; display: none"
              ></span
              ><span
                id="MathJax-Element-17-Frame"
                class="mjx-chtml MathJax_CHTML"
                tabindex="0"
                data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>1.0</mn><mrow class="MJX-TeXAtom-ORD"><mo>&amp;x2212;</mo><mn>6</mn></mrow></msup></math>\'
                role="presentation"
                style="font-size: 117%; position: relative"
                ><span id="MJXc-Node-98" class="mjx-math" aria-hidden="true"
                  ><span id="MJXc-Node-99" class="mjx-mrow"
                    ><span id="MJXc-Node-100" class="mjx-msubsup"
                      ><span class="mjx-base"
                        ><span id="MJXc-Node-101" class="mjx-mn"
                          ><span
                            class="mjx-char MJXc-TeX-main-R"
                            style="
                              padding-top: 0.398em;
                              padding-bottom: 0.332em;
                            "
                            >1.0</span
                          ></span
                        ></span
                      ><span
                        class="mjx-sup"
                        style="
                          font-size: 70.7%;
                          vertical-align: 0.591em;
                          padding-left: 0px;
                          padding-right: 0.071em;
                        "
                        ><span
                          id="MJXc-Node-102"
                          class="mjx-texatom"
                          style=""
                          ><span id="MJXc-Node-103" class="mjx-mrow"
                            ><span id="MJXc-Node-104" class="mjx-mo"
                              ><span
                                class="mjx-char MJXc-TeX-main-R"
                                style="
                                  padding-top: 0.266em;
                                  padding-bottom: 0.398em;
                                "
                                >−</span
                              ></span
                            ><span id="MJXc-Node-105" class="mjx-mn"
                              ><span
                                class="mjx-char MJXc-TeX-main-R"
                                style="
                                  padding-top: 0.398em;
                                  padding-bottom: 0.332em;
                                "
                                >6</span
                              ></span
                            ></span
                          ></span
                        ></span
                      ></span
                    ></span
                  ></span
                ><span class="MJX_Assistive_MathML" role="presentation"
                  ><math xmlns="http://www.w3.org/1998/Math/MathML"
                    ><msup
                      ><mn>1.0</mn
                      ><mrow class="MJX-TeXAtom-ORD"
                        ><mo>−</mo><mn>6</mn></mrow
                      ></msup
                    ></math
                  ></span
                ></span
              >
              <script type="math/tex" id="MathJax-Element-17">
                1.0^{-6}
              </script>
            </p>
          </td>
        </tr>
        <tr>
          <td colspan="4" align="right">
            <p>&nbsp;</p>
          </td>
        </tr>
        <tr>
          <td colspan="4">
            <hr />
            <p>
              <span
                style="
                  font-family: arial, helvetica, sans-serif;
                  font-size: x-large;
                  line-height: 1.2;
                "
                ><strong
                  >Choose turbulence variables to compute<br /></strong
              ></span>
            </p>
          </td>
        </tr>
        <tr>
          <td colspan="4">
            <p>
              <input
                type="radio"
                name="conversion"
                value="omega_from_k_epsilon"
              />
              Compute
              <a
                href="https://www.cfd-online.com/Wiki/Specific_turbulence_dissipation_rate"
                target="_blank"
                ><span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-18-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&amp;#x03C9;</mi></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-106"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-107" class="mjx-mrow"
                      ><span id="MJXc-Node-108" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                          "
                          >ω</span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><mi>ω</mi></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-18">
                  \omega
                </script></a
              >
              from
              <a
                href="https://www.cfd-online.com/Wiki/Turbulence_kinetic_energy"
                target="_blank"
                ><span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-19-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&amp;#x03BA;</mi></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-109"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-110" class="mjx-mrow"
                      ><span id="MJXc-Node-111" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                          "
                          >κ</span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><mi>κ</mi></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-19">
                  \kappa
                </script></a
              >
              and
              <a
                href="https://www.cfd-online.com/Wiki/Turbulence_dissipation_rate"
                target="_blank"
                ><span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-20-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&amp;#x03F5;</mi></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-112"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-113" class="mjx-mrow"
                      ><span id="MJXc-Node-114" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                          "
                          >ϵ</span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><mi>ϵ</mi></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-20">
                  \epsilon
                </script></a
              >
              <span
                class="MathJax_Preview"
                style="color: inherit; display: none"
              ></span
              ><span
                id="MathJax-Element-21-Frame"
                class="mjx-chtml MathJax_CHTML"
                tabindex="0"
                data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mo stretchy="false">(</mo><msup><mi>&amp;#x03B2;</mi><mo>&amp;#x2217;</mo></msup><mo>=</mo><msub><mi>C</mi><mrow class="MJX-TeXAtom-ORD"><mi>&amp;#x03BC;</mi></mrow></msub><mo>=</mo><mn>0.09</mn><mo stretchy="false">)</mo></math>\'
                role="presentation"
                style="font-size: 117%; position: relative"
                ><span
                  id="MJXc-Node-115"
                  class="mjx-math"
                  aria-hidden="true"
                  ><span id="MJXc-Node-116" class="mjx-mrow"
                    ><span id="MJXc-Node-117" class="mjx-mo"
                      ><span
                        class="mjx-char MJXc-TeX-main-R"
                        style="
                          padding-top: 0.464em;
                          padding-bottom: 0.595em;
                        "
                        >(</span
                      ></span
                    ><span id="MJXc-Node-118" class="mjx-msubsup"
                      ><span class="mjx-base" style="margin-right: -0.007em"
                        ><span id="MJXc-Node-119" class="mjx-mi"
                          ><span
                            class="mjx-char MJXc-TeX-math-I"
                            style="
                              padding-top: 0.464em;
                              padding-bottom: 0.464em;
                              padding-right: 0.007em;
                            "
                            >β</span
                          ></span
                        ></span
                      ><span
                        class="mjx-sup"
                        style="
                          font-size: 70.7%;
                          vertical-align: 0.513em;
                          padding-left: 0.084em;
                          padding-right: 0.071em;
                        "
                        ><span id="MJXc-Node-120" class="mjx-mo" style=""
                          ><span
                            class="mjx-char MJXc-TeX-main-R"
                            style="
                              padding-top: 0.201em;
                              padding-bottom: 0.332em;
                            "
                            >∗</span
                          ></span
                        ></span
                      ></span
                    ><span id="MJXc-Node-121" class="mjx-mo MJXc-space3"
                      ><span
                        class="mjx-char MJXc-TeX-main-R"
                        style="
                          padding-top: 0.069em;
                          padding-bottom: 0.332em;
                        "
                        >=</span
                      ></span
                    ><span
                      id="MJXc-Node-122"
                      class="mjx-msubsup MJXc-space3"
                      ><span class="mjx-base" style="margin-right: -0.045em"
                        ><span id="MJXc-Node-123" class="mjx-mi"
                          ><span
                            class="mjx-char MJXc-TeX-math-I"
                            style="
                              padding-top: 0.464em;
                              padding-bottom: 0.332em;
                              padding-right: 0.045em;
                            "
                            >C</span
                          ></span
                        ></span
                      ><span
                        class="mjx-sub"
                        style="
                          font-size: 70.7%;
                          vertical-align: -0.212em;
                          padding-right: 0.071em;
                        "
                        ><span
                          id="MJXc-Node-124"
                          class="mjx-texatom"
                          style=""
                          ><span id="MJXc-Node-125" class="mjx-mrow"
                            ><span id="MJXc-Node-126" class="mjx-mi"
                              ><span
                                class="mjx-char MJXc-TeX-math-I"
                                style="
                                  padding-top: 0.201em;
                                  padding-bottom: 0.464em;
                                "
                                >μ</span
                              ></span
                            ></span
                          ></span
                        ></span
                      ></span
                    ><span id="MJXc-Node-127" class="mjx-mo MJXc-space3"
                      ><span
                        class="mjx-char MJXc-TeX-main-R"
                        style="
                          padding-top: 0.069em;
                          padding-bottom: 0.332em;
                        "
                        >=</span
                      ></span
                    ><span id="MJXc-Node-128" class="mjx-mn MJXc-space3"
                      ><span
                        class="mjx-char MJXc-TeX-main-R"
                        style="
                          padding-top: 0.398em;
                          padding-bottom: 0.332em;
                        "
                        >0.09</span
                      ></span
                    ><span id="MJXc-Node-129" class="mjx-mo"
                      ><span
                        class="mjx-char MJXc-TeX-main-R"
                        style="
                          padding-top: 0.464em;
                          padding-bottom: 0.595em;
                        "
                        >)</span
                      ></span
                    ></span
                  ></span
                ><span class="MJX_Assistive_MathML" role="presentation"
                  ><math xmlns="http://www.w3.org/1998/Math/MathML"
                    ><mo stretchy="false">(</mo
                    ><msup><mi>β</mi><mo>∗</mo></msup
                    ><mo>=</mo
                    ><msub
                      ><mi>C</mi
                      ><mrow class="MJX-TeXAtom-ORD"><mi>μ</mi></mrow></msub
                    ><mo>=</mo><mn>0.09</mn
                    ><mo stretchy="false">)</mo></math
                  ></span
                ></span
              >
              <script type="math/tex" id="MathJax-Element-21">
                ( \beta^* = C_{\mu} = 0.09)
              </script>
              <br />
              <input
                type="radio"
                name="conversion"
                value="epsilon_from_k_omega"
              />
              Compute
              <a
                href="https://www.cfd-online.com/Wiki/Turbulence_dissipation_rate"
                target="_blank"
                ><span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-22-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&amp;#x03F5;</mi></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-130"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-131" class="mjx-mrow"
                      ><span id="MJXc-Node-132" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                          "
                          >ϵ</span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><mi>ϵ</mi></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-22">
                  \epsilon
                </script></a
              >
              from
              <a
                href="https://www.cfd-online.com/Wiki/Turbulence_kinetic_energy"
                target="_blank"
                ><span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-23-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&amp;#x03BA;</mi></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-133"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-134" class="mjx-mrow"
                      ><span id="MJXc-Node-135" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                          "
                          >κ</span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><mi>κ</mi></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-23">
                  \kappa
                </script></a
              >
              and
              <a
                href="https://www.cfd-online.com/Wiki/Specific_turbulence_dissipation_rate"
                target="_blank"
                ><span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-24-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&amp;#x03C9;</mi></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-136"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-137" class="mjx-mrow"
                      ><span id="MJXc-Node-138" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                          "
                          >ω</span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><mi>ω</mi></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-24">
                  \omega
                </script></a
              >
              <span
                class="MathJax_Preview"
                style="color: inherit; display: none"
              ></span
              ><span
                id="MathJax-Element-25-Frame"
                class="mjx-chtml MathJax_CHTML"
                tabindex="0"
                data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mo stretchy="false">(</mo><mi>&amp;#x03B2;</mi><mo>=</mo><msub><mi>C</mi><mrow class="MJX-TeXAtom-ORD"><mi>&amp;#x03BC;</mi></mrow></msub><mo>=</mo><mn>0.09</mn><mo stretchy="false">)</mo></math>\'
                role="presentation"
                style="font-size: 117%; position: relative"
                ><span
                  id="MJXc-Node-139"
                  class="mjx-math"
                  aria-hidden="true"
                  ><span id="MJXc-Node-140" class="mjx-mrow"
                    ><span id="MJXc-Node-141" class="mjx-mo"
                      ><span
                        class="mjx-char MJXc-TeX-main-R"
                        style="
                          padding-top: 0.464em;
                          padding-bottom: 0.595em;
                        "
                        >(</span
                      ></span
                    ><span id="MJXc-Node-142" class="mjx-mi"
                      ><span
                        class="mjx-char MJXc-TeX-math-I"
                        style="
                          padding-top: 0.464em;
                          padding-bottom: 0.464em;
                          padding-right: 0.007em;
                        "
                        >β</span
                      ></span
                    ><span id="MJXc-Node-143" class="mjx-mo MJXc-space3"
                      ><span
                        class="mjx-char MJXc-TeX-main-R"
                        style="
                          padding-top: 0.069em;
                          padding-bottom: 0.332em;
                        "
                        >=</span
                      ></span
                    ><span
                      id="MJXc-Node-144"
                      class="mjx-msubsup MJXc-space3"
                      ><span class="mjx-base" style="margin-right: -0.045em"
                        ><span id="MJXc-Node-145" class="mjx-mi"
                          ><span
                            class="mjx-char MJXc-TeX-math-I"
                            style="
                              padding-top: 0.464em;
                              padding-bottom: 0.332em;
                              padding-right: 0.045em;
                            "
                            >C</span
                          ></span
                        ></span
                      ><span
                        class="mjx-sub"
                        style="
                          font-size: 70.7%;
                          vertical-align: -0.212em;
                          padding-right: 0.071em;
                        "
                        ><span
                          id="MJXc-Node-146"
                          class="mjx-texatom"
                          style=""
                          ><span id="MJXc-Node-147" class="mjx-mrow"
                            ><span id="MJXc-Node-148" class="mjx-mi"
                              ><span
                                class="mjx-char MJXc-TeX-math-I"
                                style="
                                  padding-top: 0.201em;
                                  padding-bottom: 0.464em;
                                "
                                >μ</span
                              ></span
                            ></span
                          ></span
                        ></span
                      ></span
                    ><span id="MJXc-Node-149" class="mjx-mo MJXc-space3"
                      ><span
                        class="mjx-char MJXc-TeX-main-R"
                        style="
                          padding-top: 0.069em;
                          padding-bottom: 0.332em;
                        "
                        >=</span
                      ></span
                    ><span id="MJXc-Node-150" class="mjx-mn MJXc-space3"
                      ><span
                        class="mjx-char MJXc-TeX-main-R"
                        style="
                          padding-top: 0.398em;
                          padding-bottom: 0.332em;
                        "
                        >0.09</span
                      ></span
                    ><span id="MJXc-Node-151" class="mjx-mo"
                      ><span
                        class="mjx-char MJXc-TeX-main-R"
                        style="
                          padding-top: 0.464em;
                          padding-bottom: 0.595em;
                        "
                        >)</span
                      ></span
                    ></span
                  ></span
                ><span class="MJX_Assistive_MathML" role="presentation"
                  ><math xmlns="http://www.w3.org/1998/Math/MathML"
                    ><mo stretchy="false">(</mo><mi>β</mi><mo>=</mo
                    ><msub
                      ><mi>C</mi
                      ><mrow class="MJX-TeXAtom-ORD"><mi>μ</mi></mrow></msub
                    ><mo>=</mo><mn>0.09</mn
                    ><mo stretchy="false">)</mo></math
                  ></span
                ></span
              >
              <script type="math/tex" id="MathJax-Element-25">
                ( \beta = C_{\mu} = 0.09)
              </script>
              <br />
              <input
                type="radio"
                name="conversion"
                value="turbulence_variables_from_intensity_length_scale"
              />
              Compute turbulence variables
              <a
                href="https://www.cfd-online.com/Wiki/Turbulence_kinetic_energy"
                target="_blank"
                ><span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-26-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mo stretchy="false">(</mo><mi>&amp;#x03BA;</mi></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-152"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-153" class="mjx-mrow"
                      ><span id="MJXc-Node-154" class="mjx-mo"
                        ><span
                          class="mjx-char MJXc-TeX-main-R"
                          style="
                            padding-top: 0.464em;
                            padding-bottom: 0.595em;
                          "
                          >(</span
                        ></span
                      ><span id="MJXc-Node-155" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                          "
                          >κ</span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><mo stretchy="false">(</mo><mi>κ</mi></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-26">
                  ( \kappa
                </script></a
              >,
              <a
                href="https://www.cfd-online.com/Wiki/Turbulence_dissipation_rate"
                target="_blank"
                ><span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-27-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&amp;#x03F5;</mi></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-156"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-157" class="mjx-mrow"
                      ><span id="MJXc-Node-158" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                          "
                          >ϵ</span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><mi>ϵ</mi></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-27">
                  \epsilon
                </script></a
              >,
              <a
                href="https://www.cfd-online.com/Wiki/Specific_turbulence_dissipation_rate"
                target="_blank"
                ><span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-28-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&amp;#x03C9;</mi><mo stretchy="false">)</mo></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-159"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-160" class="mjx-mrow"
                      ><span id="MJXc-Node-161" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                          "
                          >ω</span
                        ></span
                      ><span id="MJXc-Node-162" class="mjx-mo"
                        ><span
                          class="mjx-char MJXc-TeX-main-R"
                          style="
                            padding-top: 0.464em;
                            padding-bottom: 0.595em;
                          "
                          >)</span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><mi>ω</mi><mo stretchy="false">)</mo></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-28">
                  \omega )
                </script></a
              >
              from
              <a
                href="https://www.cfd-online.com/Wiki/Turbulence_intensity"
                target="_blank"
                ><span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-29-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>T</mi><mi>u</mi></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-163"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-164" class="mjx-mrow"
                      ><span id="MJXc-Node-165" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.464em;
                            padding-bottom: 0.266em;
                            padding-right: 0.12em;
                          "
                          >T</span
                        ></span
                      ><span id="MJXc-Node-166" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                          "
                          >u</span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><mi>T</mi><mi>u</mi></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-29">
                  Tu
                </script></a
              >,
              <a
                href="https://www.cfd-online.com/Wiki/Turbulence_length_scale"
                target="_blank"
                ><span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-30-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>T</mi><msub><mi>u</mi><mi>L</mi></msub></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-167"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-168" class="mjx-mrow"
                      ><span id="MJXc-Node-169" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.464em;
                            padding-bottom: 0.266em;
                            padding-right: 0.12em;
                          "
                          >T</span
                        ></span
                      ><span id="MJXc-Node-170" class="mjx-msubsup"
                        ><span class="mjx-base"
                          ><span id="MJXc-Node-171" class="mjx-mi"
                            ><span
                              class="mjx-char MJXc-TeX-math-I"
                              style="
                                padding-top: 0.201em;
                                padding-bottom: 0.266em;
                              "
                              >u</span
                            ></span
                          ></span
                        ><span
                          class="mjx-sub"
                          style="
                            font-size: 70.7%;
                            vertical-align: -0.212em;
                            padding-right: 0.071em;
                          "
                          ><span id="MJXc-Node-172" class="mjx-mi" style=""
                            ><span
                              class="mjx-char MJXc-TeX-math-I"
                              style="
                                padding-top: 0.464em;
                                padding-bottom: 0.266em;
                              "
                              >L</span
                            ></span
                          ></span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><mi>T</mi><msub><mi>u</mi><mi>L</mi></msub></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-30">
                  Tu_L
                </script></a
              >
              and
              <span
                class="MathJax_Preview"
                style="color: inherit; display: none"
              ></span
              ><span
                id="MathJax-Element-31-Frame"
                class="mjx-chtml MathJax_CHTML"
                tabindex="0"
                data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>U</mi><mrow class="MJX-TeXAtom-ORD"><mi mathvariant="normal">&amp;#x221E;</mi></mrow></msub></math>\'
                role="presentation"
                style="font-size: 117%; position: relative"
                ><span
                  id="MJXc-Node-173"
                  class="mjx-math"
                  aria-hidden="true"
                  ><span id="MJXc-Node-174" class="mjx-mrow"
                    ><span id="MJXc-Node-175" class="mjx-msubsup"
                      ><span class="mjx-base" style="margin-right: -0.084em"
                        ><span id="MJXc-Node-176" class="mjx-mi"
                          ><span
                            class="mjx-char MJXc-TeX-math-I"
                            style="
                              padding-top: 0.464em;
                              padding-bottom: 0.332em;
                              padding-right: 0.084em;
                            "
                            >U</span
                          ></span
                        ></span
                      ><span
                        class="mjx-sub"
                        style="
                          font-size: 70.7%;
                          vertical-align: -0.212em;
                          padding-right: 0.071em;
                        "
                        ><span
                          id="MJXc-Node-177"
                          class="mjx-texatom"
                          style=""
                          ><span id="MJXc-Node-178" class="mjx-mrow"
                            ><span id="MJXc-Node-179" class="mjx-mi"
                              ><span
                                class="mjx-char MJXc-TeX-main-R"
                                style="
                                  padding-top: 0.135em;
                                  padding-bottom: 0.332em;
                                "
                                >∞</span
                              ></span
                            ></span
                          ></span
                        ></span
                      ></span
                    ></span
                  ></span
                ><span class="MJX_Assistive_MathML" role="presentation"
                  ><math xmlns="http://www.w3.org/1998/Math/MathML"
                    ><msub
                      ><mi>U</mi
                      ><mrow class="MJX-TeXAtom-ORD"
                        ><mi mathvariant="normal">∞</mi></mrow
                      ></msub
                    ></math
                  ></span
                ></span
              >
              <script type="math/tex" id="MathJax-Element-31">
                U_{\infty}
              </script>
              <br />
              <input
                type="radio"
                name="conversion"
                value="turbulence_variables_from_intensity_eddy_viscosity_ratio"
              />
              Compute turbulence variables
              <a
                href="https://www.cfd-online.com/Wiki/Turbulence_kinetic_energy"
                target="_blank"
                ><span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-32-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mo stretchy="false">(</mo><mi>&amp;#x03BA;</mi></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-180"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-181" class="mjx-mrow"
                      ><span id="MJXc-Node-182" class="mjx-mo"
                        ><span
                          class="mjx-char MJXc-TeX-main-R"
                          style="
                            padding-top: 0.464em;
                            padding-bottom: 0.595em;
                          "
                          >(</span
                        ></span
                      ><span id="MJXc-Node-183" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                          "
                          >κ</span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><mo stretchy="false">(</mo><mi>κ</mi></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-32">
                  ( \kappa
                </script></a
              >,
              <a
                href="https://www.cfd-online.com/Wiki/Turbulence_dissipation_rate"
                target="_blank"
                ><span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-33-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&amp;#x03F5;</mi></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-184"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-185" class="mjx-mrow"
                      ><span id="MJXc-Node-186" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                          "
                          >ϵ</span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><mi>ϵ</mi></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-33">
                  \epsilon
                </script></a
              >,
              <a
                href="https://www.cfd-online.com/Wiki/Specific_turbulence_dissipation_rate"
                target="_blank"
                ><span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-34-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&amp;#x03C9;</mi><mo stretchy="false">)</mo></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-187"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-188" class="mjx-mrow"
                      ><span id="MJXc-Node-189" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                          "
                          >ω</span
                        ></span
                      ><span id="MJXc-Node-190" class="mjx-mo"
                        ><span
                          class="mjx-char MJXc-TeX-main-R"
                          style="
                            padding-top: 0.464em;
                            padding-bottom: 0.595em;
                          "
                          >)</span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><mi>ω</mi><mo stretchy="false">)</mo></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-34">
                  \omega )
                </script></a
              >
              from
              <a
                href="https://www.cfd-online.com/Wiki/Turbulence_intensity"
                target="_blank"
                ><span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-35-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>T</mi><mi>u</mi></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-191"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-192" class="mjx-mrow"
                      ><span id="MJXc-Node-193" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.464em;
                            padding-bottom: 0.266em;
                            padding-right: 0.12em;
                          "
                          >T</span
                        ></span
                      ><span id="MJXc-Node-194" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                          "
                          >u</span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><mi>T</mi><mi>u</mi></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-35">
                  Tu
                </script></a
              >,
              <a
                href="https://www.cfd-online.com/Wiki/Eddy_viscosity_ratio"
                target="_blank"
                ><span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-36-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>&amp;#x03BC;</mi><mi>t</mi></msub><mrow class="MJX-TeXAtom-ORD"><mo>/</mo></mrow><mi>&amp;#x03BC;</mi></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-195"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-196" class="mjx-mrow"
                      ><span id="MJXc-Node-197" class="mjx-msubsup"
                        ><span class="mjx-base"
                          ><span id="MJXc-Node-198" class="mjx-mi"
                            ><span
                              class="mjx-char MJXc-TeX-math-I"
                              style="
                                padding-top: 0.201em;
                                padding-bottom: 0.464em;
                              "
                              >μ</span
                            ></span
                          ></span
                        ><span
                          class="mjx-sub"
                          style="
                            font-size: 70.7%;
                            vertical-align: -0.212em;
                            padding-right: 0.071em;
                          "
                          ><span id="MJXc-Node-199" class="mjx-mi" style=""
                            ><span
                              class="mjx-char MJXc-TeX-math-I"
                              style="
                                padding-top: 0.398em;
                                padding-bottom: 0.266em;
                              "
                              >t</span
                            ></span
                          ></span
                        ></span
                      ><span id="MJXc-Node-200" class="mjx-texatom"
                        ><span id="MJXc-Node-201" class="mjx-mrow"
                          ><span id="MJXc-Node-202" class="mjx-mo"
                            ><span
                              class="mjx-char MJXc-TeX-main-R"
                              style="
                                padding-top: 0.464em;
                                padding-bottom: 0.595em;
                              "
                              >/</span
                            ></span
                          ></span
                        ></span
                      ><span id="MJXc-Node-203" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.464em;
                          "
                          >μ</span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><msub><mi>μ</mi><mi>t</mi></msub
                      ><mrow class="MJX-TeXAtom-ORD"><mo>/</mo></mrow
                      ><mi>μ</mi></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-36">
                  \mu_t / \mu
                </script></a
              >,
              <span
                class="MathJax_Preview"
                style="color: inherit; display: none"
              ></span
              ><span
                id="MathJax-Element-37-Frame"
                class="mjx-chtml MathJax_CHTML"
                tabindex="0"
                data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>U</mi><mrow class="MJX-TeXAtom-ORD"><mi mathvariant="normal">&amp;#x221E;</mi></mrow></msub></math>\'
                role="presentation"
                style="font-size: 117%; position: relative"
                ><span
                  id="MJXc-Node-204"
                  class="mjx-math"
                  aria-hidden="true"
                  ><span id="MJXc-Node-205" class="mjx-mrow"
                    ><span id="MJXc-Node-206" class="mjx-msubsup"
                      ><span class="mjx-base" style="margin-right: -0.084em"
                        ><span id="MJXc-Node-207" class="mjx-mi"
                          ><span
                            class="mjx-char MJXc-TeX-math-I"
                            style="
                              padding-top: 0.464em;
                              padding-bottom: 0.332em;
                              padding-right: 0.084em;
                            "
                            >U</span
                          ></span
                        ></span
                      ><span
                        class="mjx-sub"
                        style="
                          font-size: 70.7%;
                          vertical-align: -0.212em;
                          padding-right: 0.071em;
                        "
                        ><span
                          id="MJXc-Node-208"
                          class="mjx-texatom"
                          style=""
                          ><span id="MJXc-Node-209" class="mjx-mrow"
                            ><span id="MJXc-Node-210" class="mjx-mi"
                              ><span
                                class="mjx-char MJXc-TeX-main-R"
                                style="
                                  padding-top: 0.135em;
                                  padding-bottom: 0.332em;
                                "
                                >∞</span
                              ></span
                            ></span
                          ></span
                        ></span
                      ></span
                    ></span
                  ></span
                ><span class="MJX_Assistive_MathML" role="presentation"
                  ><math xmlns="http://www.w3.org/1998/Math/MathML"
                    ><msub
                      ><mi>U</mi
                      ><mrow class="MJX-TeXAtom-ORD"
                        ><mi mathvariant="normal">∞</mi></mrow
                      ></msub
                    ></math
                  ></span
                ></span
              >
              <script type="math/tex" id="MathJax-Element-37">
                U_{\infty}
              </script>
              and kinematic viscosity
              <a
                href="https://www.cfd-online.com/Wiki/Kinematic_viscosity"
                target="_blank"
                ><span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-38-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&amp;#x03BD;</mi></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-211"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-212" class="mjx-mrow"
                      ><span id="MJXc-Node-213" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                            padding-right: 0.036em;
                          "
                          >ν</span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><mi>ν</mi></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-38">
                  \nu
                </script></a
              >
              <br />
              <input
                type="radio"
                name="conversion"
                value="intensity_from_k"
              />
              Compute turbulence intensity
              <a
                href="https://www.cfd-online.com/Wiki/Turbulence_intensity"
                target="_blank"
                ><span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-39-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mo stretchy="false">(</mo><mi>T</mi><mi>u</mi><mo stretchy="false">)</mo></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-214"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-215" class="mjx-mrow"
                      ><span id="MJXc-Node-216" class="mjx-mo"
                        ><span
                          class="mjx-char MJXc-TeX-main-R"
                          style="
                            padding-top: 0.464em;
                            padding-bottom: 0.595em;
                          "
                          >(</span
                        ></span
                      ><span id="MJXc-Node-217" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.464em;
                            padding-bottom: 0.266em;
                            padding-right: 0.12em;
                          "
                          >T</span
                        ></span
                      ><span id="MJXc-Node-218" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                          "
                          >u</span
                        ></span
                      ><span id="MJXc-Node-219" class="mjx-mo"
                        ><span
                          class="mjx-char MJXc-TeX-main-R"
                          style="
                            padding-top: 0.464em;
                            padding-bottom: 0.595em;
                          "
                          >)</span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><mo stretchy="false">(</mo><mi>T</mi><mi>u</mi
                      ><mo stretchy="false">)</mo></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-39">
                  (Tu )
                </script></a
              >
              from
              <a
                href="https://www.cfd-online.com/Wiki/Turbulence_kinetic_energy"
                target="_blank"
                ><span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-40-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&amp;#x03BA;</mi></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-220"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-221" class="mjx-mrow"
                      ><span id="MJXc-Node-222" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                          "
                          >κ</span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><mi>κ</mi></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-40">
                  \kappa
                </script></a
              >
              and freestream velocity
              <span
                class="MathJax_Preview"
                style="color: inherit; display: none"
              ></span
              >
              <span
                id="MathJax-Element-41-Frame"
                class="mjx-chtml MathJax_CHTML"
                tabindex="0"
                data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mo stretchy="false">(</mo><msub><mi>U</mi><mrow class="MJX-TeXAtom-ORD"><mi mathvariant="normal">&amp;#x221E;</mi></mrow></msub><mo stretchy="false">)</mo></math>\'
                role="presentation"
                style="font-size: 117%; position: relative"
                >
                <span
                  id="MJXc-Node-223"
                  class="mjx-math"
                  aria-hidden="true"
                  ><span id="MJXc-Node-224" class="mjx-mrow"
                    ><span id="MJXc-Node-225" class="mjx-mo"
                      ><span
                        class="mjx-char MJXc-TeX-main-R"
                        style="
                          padding-top: 0.464em;
                          padding-bottom: 0.595em;
                        "
                        >(</span
                      ></span
                    ><span id="MJXc-Node-226" class="mjx-msubsup"
                      ><span class="mjx-base" style="margin-right: -0.084em"
                        ><span id="MJXc-Node-227" class="mjx-mi"
                          ><span
                            class="mjx-char MJXc-TeX-math-I"
                            style="
                              padding-top: 0.464em;
                              padding-bottom: 0.332em;
                              padding-right: 0.084em;
                            "
                            >U</span
                          ></span
                        ></span
                      ><span
                        class="mjx-sub"
                        style="
                          font-size: 70.7%;
                          vertical-align: -0.212em;
                          padding-right: 0.071em;
                        "
                        ><span
                          id="MJXc-Node-228"
                          class="mjx-texatom"
                          style=""
                          ><span id="MJXc-Node-229" class="mjx-mrow"
                            ><span id="MJXc-Node-230" class="mjx-mi"
                              ><span
                                class="mjx-char MJXc-TeX-main-R"
                                style="
                                  padding-top: 0.135em;
                                  padding-bottom: 0.332em;
                                "
                                >∞</span
                              ></span
                            ></span
                          ></span
                        ></span
                      ></span
                    ><span id="MJXc-Node-231" class="mjx-mo"
                      ><span
                        class="mjx-char MJXc-TeX-main-R"
                        style="
                          padding-top: 0.464em;
                          padding-bottom: 0.595em;
                        "
                        >)</span
                      ></span
                    ></span
                  ></span
                ><span class="MJX_Assistive_MathML" role="presentation"
                  ><math xmlns="http://www.w3.org/1998/Math/MathML"
                    ><mo stretchy="false">(</mo
                    ><msub
                      ><mi>U</mi
                      ><mrow class="MJX-TeXAtom-ORD"
                        ><mi mathvariant="normal">∞</mi></mrow
                      ></msub
                    ><mo stretchy="false">)</mo></math
                  ></span
                ></span
              >
              <script type="math/tex" id="MathJax-Element-41">
                ( U_{\infty} )
              </script>
              <br />
              <input
                type="radio"
                name="conversion"
                value="TuL_from_k_epsilon"
              />
              Compute turbulence length scale
              <a
                href="https://www.cfd-online.com/Wiki/Turbulence_length_scale"
                target="_blank"
                ><span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-42-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mo stretchy="false">(</mo><mi>T</mi><msub><mi>u</mi><mi>L</mi></msub><mo stretchy="false">)</mo></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-232"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-233" class="mjx-mrow"
                      ><span id="MJXc-Node-234" class="mjx-mo"
                        ><span
                          class="mjx-char MJXc-TeX-main-R"
                          style="
                            padding-top: 0.464em;
                            padding-bottom: 0.595em;
                          "
                          >(</span
                        ></span
                      ><span id="MJXc-Node-235" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.464em;
                            padding-bottom: 0.266em;
                            padding-right: 0.12em;
                          "
                          >T</span
                        ></span
                      ><span id="MJXc-Node-236" class="mjx-msubsup"
                        ><span class="mjx-base"
                          ><span id="MJXc-Node-237" class="mjx-mi"
                            ><span
                              class="mjx-char MJXc-TeX-math-I"
                              style="
                                padding-top: 0.201em;
                                padding-bottom: 0.266em;
                              "
                              >u</span
                            ></span
                          ></span
                        ><span
                          class="mjx-sub"
                          style="
                            font-size: 70.7%;
                            vertical-align: -0.212em;
                            padding-right: 0.071em;
                          "
                          ><span id="MJXc-Node-238" class="mjx-mi" style=""
                            ><span
                              class="mjx-char MJXc-TeX-math-I"
                              style="
                                padding-top: 0.464em;
                                padding-bottom: 0.266em;
                              "
                              >L</span
                            ></span
                          ></span
                        ></span
                      ><span id="MJXc-Node-239" class="mjx-mo"
                        ><span
                          class="mjx-char MJXc-TeX-main-R"
                          style="
                            padding-top: 0.464em;
                            padding-bottom: 0.595em;
                          "
                          >)</span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><mo stretchy="false">(</mo><mi>T</mi
                      ><msub><mi>u</mi><mi>L</mi></msub
                      ><mo stretchy="false">)</mo></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-42">
                  (Tu_L)
                </script></a
              >
              from
              <a
                href="https://www.cfd-online.com/Wiki/Turbulence_kinetic_energy"
                target="_blank"
                ><span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-43-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&amp;#x03BA;</mi></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-240"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-241" class="mjx-mrow"
                      ><span id="MJXc-Node-242" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                          "
                          >κ</span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><mi>κ</mi></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-43">
                  \kappa
                </script></a
              >
              and
              <a
                href="https://www.cfd-online.com/Wiki/Turbulence_dissipation_rate"
                target="_blank"
                ><span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-44-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&amp;#x03F5;</mi></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-243"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-244" class="mjx-mrow"
                      ><span id="MJXc-Node-245" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                          "
                          >ϵ</span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><mi>ϵ</mi></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-44">
                  \epsilon
                </script></a
              >
              <br />
              <input
                type="radio"
                name="conversion"
                value="TuL_from_k_omega"
              />
              Compute turbulence length scale
              <a
                href="https://www.cfd-online.com/Wiki/Turbulence_length_scale"
                target="_blank"
                ><span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-45-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mo stretchy="false">(</mo><mi>T</mi><msub><mi>u</mi><mi>L</mi></msub><mo stretchy="false">)</mo></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-246"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-247" class="mjx-mrow"
                      ><span id="MJXc-Node-248" class="mjx-mo"
                        ><span
                          class="mjx-char MJXc-TeX-main-R"
                          style="
                            padding-top: 0.464em;
                            padding-bottom: 0.595em;
                          "
                          >(</span
                        ></span
                      ><span id="MJXc-Node-249" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.464em;
                            padding-bottom: 0.266em;
                            padding-right: 0.12em;
                          "
                          >T</span
                        ></span
                      ><span id="MJXc-Node-250" class="mjx-msubsup"
                        ><span class="mjx-base"
                          ><span id="MJXc-Node-251" class="mjx-mi"
                            ><span
                              class="mjx-char MJXc-TeX-math-I"
                              style="
                                padding-top: 0.201em;
                                padding-bottom: 0.266em;
                              "
                              >u</span
                            ></span
                          ></span
                        ><span
                          class="mjx-sub"
                          style="
                            font-size: 70.7%;
                            vertical-align: -0.212em;
                            padding-right: 0.071em;
                          "
                          ><span id="MJXc-Node-252" class="mjx-mi" style=""
                            ><span
                              class="mjx-char MJXc-TeX-math-I"
                              style="
                                padding-top: 0.464em;
                                padding-bottom: 0.266em;
                              "
                              >L</span
                            ></span
                          ></span
                        ></span
                      ><span id="MJXc-Node-253" class="mjx-mo"
                        ><span
                          class="mjx-char MJXc-TeX-main-R"
                          style="
                            padding-top: 0.464em;
                            padding-bottom: 0.595em;
                          "
                          >)</span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><mo stretchy="false">(</mo><mi>T</mi
                      ><msub><mi>u</mi><mi>L</mi></msub
                      ><mo stretchy="false">)</mo></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-45">
                  (Tu_L)
                </script></a
              >
              from<a
                href="https://www.cfd-online.com/Wiki/Turbulence_kinetic_energy"
                target="_blank"
              >
                <span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-46-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&amp;#x03BA;</mi></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-254"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-255" class="mjx-mrow"
                      ><span id="MJXc-Node-256" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                          "
                          >κ</span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><mi>κ</mi></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-46">
                  \kappa
                </script> </a
              >and
              <a
                href="https://www.cfd-online.com/Wiki/Specific_turbulence_dissipation_rate"
                target="_blank"
                ><span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-47-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&amp;#x03C9;</mi></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-257"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-258" class="mjx-mrow"
                      ><span id="MJXc-Node-259" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                          "
                          >ω</span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><mi>ω</mi></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-47">
                  \omega
                </script> </a
              ><br />
              <input
                type="radio"
                name="conversion"
                value="eddy_viscosity_ratio_from_k_epsion"
              />
              Compute turbulence eddy viscosity ratio
              <a
                href="https://www.cfd-online.com/Wiki/Eddy_viscosity_ratio"
                target="_blank"
                ><span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-48-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mo stretchy="false">(</mo><msub><mi>&amp;#x03BC;</mi><mi>t</mi></msub><mrow class="MJX-TeXAtom-ORD"><mo>/</mo></mrow><mi>&amp;#x03BC;</mi><mo stretchy="false">)</mo></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-260"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-261" class="mjx-mrow"
                      ><span id="MJXc-Node-262" class="mjx-mo"
                        ><span
                          class="mjx-char MJXc-TeX-main-R"
                          style="
                            padding-top: 0.464em;
                            padding-bottom: 0.595em;
                          "
                          >(</span
                        ></span
                      ><span id="MJXc-Node-263" class="mjx-msubsup"
                        ><span class="mjx-base"
                          ><span id="MJXc-Node-264" class="mjx-mi"
                            ><span
                              class="mjx-char MJXc-TeX-math-I"
                              style="
                                padding-top: 0.201em;
                                padding-bottom: 0.464em;
                              "
                              >μ</span
                            ></span
                          ></span
                        ><span
                          class="mjx-sub"
                          style="
                            font-size: 70.7%;
                            vertical-align: -0.212em;
                            padding-right: 0.071em;
                          "
                          ><span id="MJXc-Node-265" class="mjx-mi" style=""
                            ><span
                              class="mjx-char MJXc-TeX-math-I"
                              style="
                                padding-top: 0.398em;
                                padding-bottom: 0.266em;
                              "
                              >t</span
                            ></span
                          ></span
                        ></span
                      ><span id="MJXc-Node-266" class="mjx-texatom"
                        ><span id="MJXc-Node-267" class="mjx-mrow"
                          ><span id="MJXc-Node-268" class="mjx-mo"
                            ><span
                              class="mjx-char MJXc-TeX-main-R"
                              style="
                                padding-top: 0.464em;
                                padding-bottom: 0.595em;
                              "
                              >/</span
                            ></span
                          ></span
                        ></span
                      ><span id="MJXc-Node-269" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.464em;
                          "
                          >μ</span
                        ></span
                      ><span id="MJXc-Node-270" class="mjx-mo"
                        ><span
                          class="mjx-char MJXc-TeX-main-R"
                          style="
                            padding-top: 0.464em;
                            padding-bottom: 0.595em;
                          "
                          >)</span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><mo stretchy="false">(</mo
                      ><msub><mi>μ</mi><mi>t</mi></msub
                      ><mrow class="MJX-TeXAtom-ORD"><mo>/</mo></mrow
                      ><mi>μ</mi><mo stretchy="false">)</mo></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-48">
                  (\mu_t / \mu )
                </script></a
              >
              from
              <a
                href="https://www.cfd-online.com/Wiki/Turbulence_kinetic_energy"
                target="_blank"
                ><span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-49-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&amp;#x03BA;</mi></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-271"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-272" class="mjx-mrow"
                      ><span id="MJXc-Node-273" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                          "
                          >κ</span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><mi>κ</mi></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-49">
                  \kappa
                </script></a
              >
              and
              <a
                href="https://www.cfd-online.com/Wiki/Turbulence_dissipation_rate"
                target="_blank"
                ><span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-50-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&amp;#x03F5;</mi></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-274"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-275" class="mjx-mrow"
                      ><span id="MJXc-Node-276" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                          "
                          >ϵ</span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><mi>ϵ</mi></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-50">
                  \epsilon
                </script></a
              >
              <br />
              <input
                type="radio"
                name="conversion"
                value="eddy_viscosity_ratio_from_k_omega"
              />
              Compute turbulence eddy viscosity ratio
              <a
                href="https://www.cfd-online.com/Wiki/Eddy_viscosity_ratio"
                target="_blank"
                ><span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-51-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mo stretchy="false">(</mo><msub><mi>&amp;#x03BC;</mi><mi>t</mi></msub><mrow class="MJX-TeXAtom-ORD"><mo>/</mo></mrow><mi>&amp;#x03BC;</mi><mo stretchy="false">)</mo></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-277"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-278" class="mjx-mrow"
                      ><span id="MJXc-Node-279" class="mjx-mo"
                        ><span
                          class="mjx-char MJXc-TeX-main-R"
                          style="
                            padding-top: 0.464em;
                            padding-bottom: 0.595em;
                          "
                          >(</span
                        ></span
                      ><span id="MJXc-Node-280" class="mjx-msubsup"
                        ><span class="mjx-base"
                          ><span id="MJXc-Node-281" class="mjx-mi"
                            ><span
                              class="mjx-char MJXc-TeX-math-I"
                              style="
                                padding-top: 0.201em;
                                padding-bottom: 0.464em;
                              "
                              >μ</span
                            ></span
                          ></span
                        ><span
                          class="mjx-sub"
                          style="
                            font-size: 70.7%;
                            vertical-align: -0.212em;
                            padding-right: 0.071em;
                          "
                          ><span id="MJXc-Node-282" class="mjx-mi" style=""
                            ><span
                              class="mjx-char MJXc-TeX-math-I"
                              style="
                                padding-top: 0.398em;
                                padding-bottom: 0.266em;
                              "
                              >t</span
                            ></span
                          ></span
                        ></span
                      ><span id="MJXc-Node-283" class="mjx-texatom"
                        ><span id="MJXc-Node-284" class="mjx-mrow"
                          ><span id="MJXc-Node-285" class="mjx-mo"
                            ><span
                              class="mjx-char MJXc-TeX-main-R"
                              style="
                                padding-top: 0.464em;
                                padding-bottom: 0.595em;
                              "
                              >/</span
                            ></span
                          ></span
                        ></span
                      ><span id="MJXc-Node-286" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.464em;
                          "
                          >μ</span
                        ></span
                      ><span id="MJXc-Node-287" class="mjx-mo"
                        ><span
                          class="mjx-char MJXc-TeX-main-R"
                          style="
                            padding-top: 0.464em;
                            padding-bottom: 0.595em;
                          "
                          >)</span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><mo stretchy="false">(</mo
                      ><msub><mi>μ</mi><mi>t</mi></msub
                      ><mrow class="MJX-TeXAtom-ORD"><mo>/</mo></mrow
                      ><mi>μ</mi><mo stretchy="false">)</mo></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-51">
                  (\mu_t / \mu)
                </script> </a
              >from
              <a
                href="https://www.cfd-online.com/Wiki/Turbulence_kinetic_energy"
                target="_blank"
                ><span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-52-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&amp;#x03BA;</mi></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-288"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-289" class="mjx-mrow"
                      ><span id="MJXc-Node-290" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                          "
                          >κ</span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><mi>κ</mi></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-52">
                  \kappa
                </script></a
              >
              and
              <a
                href="https://www.cfd-online.com/Wiki/Specific_turbulence_dissipation_rate"
                target="_blank"
              >
                <span
                  class="MathJax_Preview"
                  style="color: inherit; display: none"
                ></span
                ><span
                  id="MathJax-Element-53-Frame"
                  class="mjx-chtml MathJax_CHTML"
                  tabindex="0"
                  data-mathml=\'<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&amp;#x03C9;</mi></math>\'
                  role="presentation"
                  style="font-size: 117%; position: relative"
                  ><span
                    id="MJXc-Node-291"
                    class="mjx-math"
                    aria-hidden="true"
                    ><span id="MJXc-Node-292" class="mjx-mrow"
                      ><span id="MJXc-Node-293" class="mjx-mi"
                        ><span
                          class="mjx-char MJXc-TeX-math-I"
                          style="
                            padding-top: 0.201em;
                            padding-bottom: 0.266em;
                          "
                          >ω</span
                        ></span
                      ></span
                    ></span
                  ><span class="MJX_Assistive_MathML" role="presentation"
                    ><math xmlns="http://www.w3.org/1998/Math/MathML"
                      ><mi>ω</mi></math
                    ></span
                  ></span
                >
                <script type="math/tex" id="MathJax-Element-53">
                  \omega
                </script></a
              >
            </p>
          </td>
        </tr>
        <tr>
          <td style="height: 30px" colspan="4" align="left">
            <input
              class="button button2 button3"
              onclick="convert(this.form)"
              type="text"
              value="Compute"
            />
            <input
              class="button button2 button3"
              onclick="resetForm(this.form)"
              type="text"
              value="Reset values"
            />
          </td>
        </tr>
        <tr>
          <td style="height: 0px" colspan="4" align="right">
            <p>&nbsp;</p>
          </td>
        </tr>
        <tr>
          <td colspan="4">
            <p
              style="
                border: 1px solid #faebcc;
                border-radius: 5px;
                background-color: #fcf8e3;
                padding-top: 10px;
                padding-bottom: 10px;
                padding-left: 10px;
                font-family: arial, helvetica, sans-serif;
                font-size: small;
                color: #8a6d3b;
                width: 80%;
              "
            >
              <strong>Warning.</strong> The formulas used to estimate the
              turbulence quantities values may vary from software to
              software.
            </p>
          </td>
        </tr>
        <tr>
          <td colspan="4">
            <p
              style="
                border: 1px solid #d6e9c6;
                border-radius: 5px;
                background-color: #dff0d8;
                padding-top: 10px;
                padding-bottom: 10px;
                padding-left: 10px;
                font-family: arial, helvetica, sans-serif;
                font-size: small;
                color: #468847;
                width: 80%;
              "
            >
              <strong
                >For more information, visit the following links:
                <br />&nbsp;<br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong
              >NASA Turbulence Modeling Resource
              <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              https://turbmodels.larc.nasa.gov/ <br />&nbsp;&nbsp;<br />
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CFD-Online Turbulence
              free-stream boundary conditions
              <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              https://www.cfd-online.com/Wiki/Turbulence_free-stream_boundary_conditions<strong>
                <br />
              </strong>
            </p>
          </td>
        </tr>
        <tr>
          <td style="height: 0px" colspan="4">
            <p>&nbsp;</p>
          </td>
        </tr>
        <tr>
          <td colspan="4">
            <hr />
            <p>
              <span
                style="
                  font-family: arial, helvetica, sans-serif;
                  font-size: x-large;
                  line-height: 1.2;
                "
                ><strong
                  >Choose preset values of turbulence intensity and eddy
                  viscosity ratio<br /></strong
              ></span>
            </p>
          </td>
        </tr>
        <tr>
          <td colspan="4" id="to_inline_block" >
            <input
              style="display:inline-block"
              type="radio"
              name="estimation"
              value="turbulence_intensity"
            />&nbsp;&nbsp; Choose turbulence intensity level:
            &nbsp;&nbsp;<select class="select_section" name="level_of_turbulence">
              <option value="low_turbulence">Low turbulence case</option>
              <option value="medium_turbulence">
                Medium turbulence case
              </option>
              <option value="high_turbulence">High turbulence case</option>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="4">
            <p>&nbsp;</p>
          </td>
        </tr>
        <tr>
          <td colspan="4">
            <p
              style="
                border: 1px solid #faebcc;
                border-radius: 5px;
                background-color: #fcf8e3;
                padding-top: 10px;
                padding-bottom: 10px;
                padding-left: 10px;
                font-family: arial, helvetica, sans-serif;
                font-size: small;
                color: #8a6d3b;
                width: 80%;
              "
            >
              <strong>Low turbulence case: </strong> external flow around
              cars, ships, submarines, and aircrafts. <br />
              <br />
              <strong>Medium turbulence case: </strong> flow in
              not-so-complex devices like large pipes, fans, ventilation
              flows, wind tunnels, or low speed flows. <br />
              <br />
              <strong>High turbulence case:</strong> high-speed flow inside
              complex geometries like heat-exchangers and rotating machinery
              (turbines and compressors).
            </p>
          </td>
        </tr>
        <tr>
          <td colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="4">
            <input
              class="button button2 button3"
              onclick="estimate(this.form)"
              type="text"
              value="Set values"
            />
            <input
              class="button button2 button3"
              onclick="resetForm(this.form)"
              type="text"
              value="Reset values"
            />
          </td>
        </tr>
      </tbody>
    </table>
  </form>
    ';
}

//use css
function enqueue_custom_styles() {
  wp_enqueue_style( 'custom-styles', plugin_dir_url( __FILE__ ) . 'style.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_styles' );

//user js
function add_custom_script() {
    ?>
        <script type="text/javascript" language="JavaScript">
  
      window.onload = openPage;

      var DefaultColor = "#FFFFFF";
      var ErrorColor = "#FFCCCC";
      var SourceColor = "#CCFFFF";
      var TargetColor = "#CCFFCC";

      function openPage() {
        clearformColors(document.getElementById("turb_prop"));
        document.getElementById("ErrorColor").bgColor = ErrorColor;
        document.getElementById("SourceColor").bgColor = SourceColor;
        document.getElementById("TargetColor").bgColor = TargetColor;
      }

      function clearformColors(form) {
        form.u_freestream.style.backgroundColor = DefaultColor;
        form.k.style.backgroundColor = DefaultColor;
        form.epsilon.style.backgroundColor = DefaultColor;
        form.omega.style.backgroundColor = DefaultColor;
        form.Tu.style.backgroundColor = DefaultColor;
        form.Tu_L.style.backgroundColor = DefaultColor;
        form.nu.style.backgroundColor = DefaultColor;
        form.eddy_viscosity_ratio.style.backgroundColor = DefaultColor;
        form.u_freestream.style.border = "1px solid lightgrey";
        form.k.style.border = "1px solid lightgrey";
        form.epsilon.style.border = "1px solid lightgrey";
        form.omega.style.border = "1px solid lightgrey";
        form.Tu.style.border = "1px solid lightgrey";
        form.Tu_L.style.border = "1px solid lightgrey";
        form.nu.style.border = "1px solid lightgrey";
        form.eddy_viscosity_ratio.style.border = "1px solid lightgrey";
      }

      function resetForm(form) {
        form.reset();
        clearformColors(form);
      }

      function getCheckedValue(radioObj) {
        if (!radioObj) return "";
        var radioLength = radioObj.length;
        if (radioLength == undefined)
          if (radioObj.checked) return radioObj.value;
          else return "";
        for (var i = 0; i < radioLength; i++) {
          if (radioObj[i].checked) {
            return radioObj[i].value;
          }
        }
        return "";
      }

      function check_positive_number(data, name) {
        if (
          !isNaN(parseFloat(data.value)) &&
          isFinite(data.value) &&
          data.value > 0.0
        ) {
          data.style.backgroundColor = DefaultColor;
          return true;
        } else {
          alert(name + " must be set to a positive number.");
          data.style.backgroundColor = ErrorColor;
          return false;
        }
      }

      function check_number(data, name) {
        if (
          !isNaN(parseFloat(data.value)) &&
          isFinite(data.value) &&
          data.value > 0.0
        ) {
          return true;
        } else {
          alert(name + " must be set to a number.");
          data.style.backgroundColor = ErrorColor;
          return false;
        }
      }

      function estimate(form) {
        to_estimate = getCheckedValue(form.estimation);
        if (to_estimate != "") {
          switch (to_estimate) {
            case "turbulence_intensity":
              switch (form.level_of_turbulence.value) {
                case "low_turbulence":
                  form.Tu.value = "1";
                  form.Tu.style.backgroundColor = TargetColor;
                  break;
                case "medium_turbulence":
                  form.Tu.value = "5";
                  form.Tu.style.backgroundColor = TargetColor;
                  break;
                case "high_turbulence":
                  form.Tu.value = "10";
                  form.Tu.style.backgroundColor = TargetColor;
                  break;
              }
              break;
          }
        } else {
          alert("Nothing marked to be estimated");
        }
      }

      function convert(form) {
        to_convert = getCheckedValue(form.conversion);
        clearformColors(form);
        if (to_convert != "") {
          switch (to_convert) {
            case "omega_from_k_epsilon":
              if (
                check_positive_number(form.k, "Turbulence kinetic energy") &&
                check_positive_number(form.epsilon, "Turbulence dissipation")
              ) {
                form.k.style.backgroundColor = SourceColor;
                form.epsilon.style.backgroundColor = SourceColor;
                form.omega.style.backgroundColor = TargetColor;
                form.omega.value = form.epsilon.value / (form.k.value * 0.09);
              }
              break;
            case "epsilon_from_k_omega":
              if (
                check_positive_number(form.k, "Turbulence kinetic energy") &&
                check_positive_number(
                  form.omega,
                  "Specific turbulence dissipation"
                )
              ) {
                form.k.style.backgroundColor = SourceColor;
                form.omega.style.backgroundColor = SourceColor;
                form.epsilon.style.backgroundColor = TargetColor;
                form.epsilon.value = form.omega.value * form.k.value * 0.09;
              }
              break;
            case "turbulence_variables_from_intensity_length_scale":
              if (
                check_positive_number(
                  form.u_freestream,
                  "Freestream velocity"
                ) &&
                check_positive_number(form.Tu, "Turbulence intensity") &&
                check_positive_number(form.Tu_L, "Turbulence length scale")
              ) {
                form.u_freestream.style.backgroundColor = SourceColor;
                form.Tu.style.backgroundColor = SourceColor;
                form.Tu_L.backgroundColor = SourceColor;
                form.k.style.backgroundColor = TargetColor;
                form.epsilon.style.backgroundColor = TargetColor;
                form.omega.style.backgroundColor = TargetColor;
                form.k.value =
                  1.5 *
                  Math.pow(form.Tu.value / 100, 2) *
                  Math.pow(form.u_freestream.value, 2);
                form.epsilon.value =
                  (0.09 * Math.pow(form.k.value, 1.5)) / form.Tu_L.value;
                form.omega.value = form.epsilon.value / (0.09 * form.k.value);
              }
              break;
            case "turbulence_variables_from_intensity_eddy_viscosity_ratio":
              if (
                check_positive_number(
                  form.u_freestream,
                  "Freestream velocity"
                ) &&
                check_positive_number(form.Tu, "Turbulence intensity") &&
                check_positive_number(
                  form.eddy_viscosity_ratio,
                  "Eddy viscosity ration"
                ) &&
                check_positive_number(form.nu, "Molecular dynamic viscosity")
              ) {
                form.u_freestream.style.backgroundColor = SourceColor;
                form.Tu.style.backgroundColor = SourceColor;
                form.eddy_viscosity_ratio.style.backgroundColor = SourceColor;
                form.k.style.backgroundColor = TargetColor;
                form.epsilon.style.backgroundColor = TargetColor;
                form.omega.style.backgroundColor = TargetColor;
                form.k.value =
                  1.5 *
                  Math.pow(form.Tu.value / 100, 2) *
                  Math.pow(form.u_freestream.value, 2);
                form.epsilon.value =
                  (0.09 * Math.pow(form.k.value, 2)) /
                  (form.nu.value * form.eddy_viscosity_ratio.value);
                form.omega.value = form.epsilon.value / (0.09 * form.k.value);
              }
              break;
            case "intensity_from_k":
              if (
                check_positive_number(
                  form.u_freestream,
                  "Freestream velocity"
                ) &&
                check_positive_number(form.k, "Turbulence kinetic energy")
              ) {
                form.u_freestream.style.backgroundColor = SourceColor;
                form.k.style.backgroundColor = SourceColor;
                form.Tu.style.backgroundColor = TargetColor;
                form.Tu.value =
                  (100 * Math.pow((2 * form.k.value) / 3, 0.5)) /
                  form.u_freestream.value;
              }
              break;
            case "TuL_from_k_epsilon":
              if (
                check_positive_number(form.k, "Turbulence kinetic energy") &&
                check_positive_number(form.epsilon, "Turbulence dissipation")
              ) {
                form.k.style.backgroundColor = SourceColor;
                form.epsilon.style.backgroundColor = SourceColor;
                form.Tu_L.style.backgroundColor = TargetColor;
                form.Tu_L.value =
                  (0.09 * Math.pow(form.k.value, 1.5)) / form.epsilon.value;
              }
              break;
            case "TuL_from_k_omega":
              if (
                check_positive_number(form.k, "Turbulence kinetic energy") &&
                check_positive_number(
                  form.omega,
                  "Specific turbulence dissipation"
                )
              ) {
                form.k.style.backgroundColor = SourceColor;
                form.omega.style.backgroundColor = SourceColor;
                form.Tu_L.style.backgroundColor = TargetColor;
                form.Tu_L.value =
                  Math.pow(form.k.value, 0.5) / form.omega.value;
              }
              break;
            case "eddy_viscosity_ratio_from_k_epsion":
              if (
                check_positive_number(form.k, "Turbulence kinetic energy") &&
                check_positive_number(form.epsilon, "Turbulence dissipation") &&
                check_positive_number(form.nu, "Molecular dynamic viscosity")
              ) {
                form.k.style.backgroundColor = SourceColor;
                form.epsilon.style.backgroundColor = SourceColor;
                form.nu.style.backgroundColor = SourceColor;
                form.eddy_viscosity_ratio.style.backgroundColor = TargetColor;
                form.eddy_viscosity_ratio.value =
                  (0.09 * Math.pow(form.k.value, 2)) /
                  (form.nu.value * form.epsilon.value);
              }
              break;
            case "eddy_viscosity_ratio_from_k_omega":
              if (
                check_positive_number(form.k, "Turbulence kinetic energy") &&
                check_positive_number(form.epsilon, "Turbulence dissipation") &&
                check_positive_number(form.nu, "Molecular dynamic viscosity")
              ) {
                form.k.style.backgroundColor = SourceColor;
                form.omega.style.backgroundColor = SourceColor;
                form.nu.style.backgroundColor = SourceColor;
                form.eddy_viscosity_ratio.style.backgroundColor = TargetColor;
                form.eddy_viscosity_ratio.value =
                  form.k.value / (form.nu.value * form.omega.value);
              }
              break;
          }
        } else {
          alert("Nothing marked to be converted");
        }
      }

      // end hide
      // ]]>
    </script>
    <?php
}
add_action('wp_footer', 'add_custom_script');



