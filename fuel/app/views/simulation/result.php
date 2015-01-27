<!-- Results -->

        <div class="row">
            <div class="clearness col-sm-12">
                
                <div class="row">
                    <div class="lead col-sm-3">
                        <h1>Résultats</h1>
                    </div>
                </div>
                
                <div class="row">
                    <div class="lead col-sm-6">
                       <table class="table table-responsive table-striped table-condensed">
                          <tr>
                              <td><b>&nbsp; Puissance moyenne surfacique en entrée :</b></td><td> XXXX </td><td>W/m<sup>2</sup></td>
                          </tr>
                          <tr>
                            <td><b>&nbsp; Puissance moyenne en entrée :</td><td> XXXX </td><td>kWh</td>
                          </tr>
                          <tr>
                            <td><b>&nbsp; Vitesse de vent pour puissance maximale :</td><td> XXXX </td><td>m/s</td>
                          </tr>
                          <tr>
                            <td><b>&nbsp; Vitesse moyenne à hauteur du moyeu :</td><td> XXXX </td><td>m/s</td>
                          </tr>
                        </table>
                    </div>
                    <div class="lead col-sm-6">
                       <table class="table table-responsive table-striped table-condensed">
                          <tr>
                            <td><b>&nbsp; Puissance moyenne surfacique en sortie :</td><td> <?php echo $power_mean ?> </td><td>W/m<sup>2</sup></td>
                          </tr>
                          <tr>
                            <td><b>&nbsp; Puissance moyenne en sortie :</td><td> XXXX </td><td>kW</td>
                          </tr>
                          <tr>
                            <td><b>&nbsp; Production totale annuelle :</td><td> <?php echo $production ?> </td><td>kWh/an</td>
                          </tr>
                          <tr>
                            <td><b>&nbsp; Facteur de charge :</td><td> <?php echo $charge_factor ?> </td><td>%</td>
                          </tr>
                        </table>
                    </div>
                </div>
                        
                
                
                 <div class="row">
                    <div class="lead col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">Distribution des vents</div>
                                <div class="panel-body">
                                    <div id="power-chart" style="min-width: 310px; height: 400px; margin: 0 auto" data-highcharts-chart="0"><div class="highcharts-container" id="highcharts-0" style="position: relative; overflow: hidden; width: 523px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg version="1.1" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="523" height="400"><desc>Created with Highcharts 4.0.4</desc><defs><clipPath id="highcharts-1"><rect x="0" y="0" width="440" height="225"></rect></clipPath></defs><rect x="0" y="0" width="523" height="400" strokeWidth="0" fill="#FFFFFF" class=" highcharts-background"></rect><path fill="none" d="M 73 251.5 L 513 251.5" stroke="#808080" stroke-width="1"></path><g class="highcharts-button" style="cursor:default;" stroke-linecap="round" transform="translate(489,10)"><title>Chart context menu</title><rect x="0.5" y="0.5" width="24" height="22" strokeWidth="1" fill="white" stroke="none" stroke-width="1" rx="2" ry="2"></rect><path fill="#E0E0E0" d="M 6 6.5 L 20 6.5 M 6 11.5 L 20 11.5 M 6 16.5 L 20 16.5" stroke="#666" stroke-width="3" zIndex="1"></path><text x="0" zIndex="1" style="color:black;fill:black;" y="13"></text></g><path fill="rgba(67,67,72,0.25)" d="M 0 0"></path><g class="highcharts-grid" zIndex="1"></g><g class="highcharts-grid" zIndex="1"><path fill="none" d="M 73 70.5 L 513 70.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 73 116.5 L 513 116.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 73 161.5 L 513 161.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 73 206.5 L 513 206.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 73 251.5 L 513 251.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 73 296.5 L 513 296.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path></g><g class="highcharts-axis" zIndex="2"><path fill="none" d="M 172.5 296 L 172.5 306" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 268.5 296 L 268.5 306" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 364.5 296 L 364.5 306" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 460.5 296 L 460.5 306" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 76.5 296 L 76.5 306" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><text x="293" zIndex="7" text-anchor="middle" transform="translate(0,0)" class=" highcharts-xaxis-title" style="color:#707070;fill:#707070;" visibility="visible" y="338"><tspan>Vitesse du vent (m/s)</tspan></text><path fill="none" d="M 73 296.5 L 513 296.5" stroke="#C0D0E0" stroke-width="1" zIndex="7" visibility="visible"></path></g><g class="highcharts-axis" zIndex="2"><text x="27.71875" zIndex="7" text-anchor="middle" transform="translate(0,0) rotate(270 27.71875 183.5)" class=" highcharts-yaxis-title" style="color:#707070;fill:#707070;" visibility="visible" y="183.5"><tspan>Puissance (kW)</tspan></text></g><g class="highcharts-series-group" zIndex="3"><g class="highcharts-series" visibility="visible" zIndex="0.1" transform="translate(73,71) scale(1 1)" clip-path="url(#highcharts-1)"><path fill="none" d="M 4.313725490196078 180 L 52.24400871459696 180 L 100.17429193899783 180 L 148.1045751633987 175.5 L 196.03485838779957 171 L 243.96514161220045 162 L 291.8954248366013 144 L 339.8257080610022 108 L 387.75599128540307 36 L 435.6862745098039 36" stroke="#7cb5ec" stroke-width="2" zIndex="1" stroke-linejoin="round" stroke-linecap="round"></path><path fill="none" d="M -5.686274509803922 180 L 4.313725490196078 180 L 52.24400871459696 180 L 100.17429193899783 180 L 148.1045751633987 175.5 L 196.03485838779957 171 L 243.96514161220045 162 L 291.8954248366013 144 L 339.8257080610022 108 L 387.75599128540307 36 L 435.6862745098039 36 L 445.6862745098039 36" stroke-linejoin="round" visibility="visible" stroke="rgba(192,192,192,0.0001)" stroke-width="22" zIndex="2" class=" highcharts-tracker" style=""></path></g><g class="highcharts-markers highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(73,71) scale(1 1)" clip-path="none" style=""><path fill="#7cb5ec" d="M 435 32 C 440.328 32 440.328 40 435 40 C 429.672 40 429.672 32 435 32 Z"></path><path fill="#7cb5ec" d="M 387 32 C 392.328 32 392.328 40 387 40 C 381.672 40 381.672 32 387 32 Z"></path><path fill="#7cb5ec" d="M 339 104 C 344.328 104 344.328 112 339 112 C 333.672 112 333.672 104 339 104 Z"></path><path fill="#7cb5ec" d="M 291 140 C 296.328 140 296.328 148 291 148 C 285.672 148 285.672 140 291 140 Z"></path><path fill="#7cb5ec" d="M 243 158 C 248.328 158 248.328 166 243 166 C 237.672 166 237.672 158 243 158 Z"></path><path fill="#7cb5ec" d="M 196 167 C 201.328 167 201.328 175 196 175 C 190.672 175 190.672 167 196 167 Z"></path><path fill="#7cb5ec" d="M 148 171.5 C 153.328 171.5 153.328 179.5 148 179.5 C 142.672 179.5 142.672 171.5 148 171.5 Z"></path><path fill="#7cb5ec" d="M 100 176 C 105.328 176 105.328 184 100 184 C 94.672 184 94.672 176 100 176 Z"></path><path fill="#7cb5ec" d="M 52 176 C 57.328 176 57.328 184 52 184 C 46.672 184 46.672 176 52 176 Z"></path><path fill="#7cb5ec" d="M 4 176 C 9.328 176 9.328 184 4 184 C -1.328 184 -1.328 176 4 176 Z"></path></g><g class="highcharts-series" visibility="visible" zIndex="0.1" transform="translate(73,71) scale(1 1)" clip-path="url(#highcharts-1)"><path fill="none" d="M 4.313725490196078 180 L 52.24400871459696 180 L 100.17429193899783 180 L 148.1045751633987 153 L 196.03485838779957 126 L 243.96514161220045 99 L 291.8954248366013 72 L 339.8257080610022 45 L 387.75599128540307 18 L 435.6862745098039 18" stroke="#434348" stroke-width="2" zIndex="1" stroke-linejoin="round" stroke-linecap="round"></path><path fill="none" d="M -5.686274509803922 180 L 4.313725490196078 180 L 52.24400871459696 180 L 100.17429193899783 180 L 148.1045751633987 153 L 196.03485838779957 126 L 243.96514161220045 99 L 291.8954248366013 72 L 339.8257080610022 45 L 387.75599128540307 18 L 435.6862745098039 18 L 445.6862745098039 18" stroke-linejoin="round" visibility="visible" stroke="rgba(192,192,192,0.0001)" stroke-width="22" zIndex="2" class=" highcharts-tracker" style=""></path></g><g class="highcharts-markers highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(73,71) scale(1 1)" clip-path="none" style=""><path fill="#434348" d="M 435.6862745098039 14 L 439.6862745098039 18 435.6862745098039 22 431.6862745098039 18 Z" stroke-width="1"></path><path fill="#434348" d="M 387.75599128540307 14 L 391.75599128540307 18 387.75599128540307 22 383.75599128540307 18 Z" stroke-width="1"></path><path fill="#434348" d="M 339 41 L 343 45 339 49 335 45 Z"></path><path fill="#434348" d="M 291 68 L 295 72 291 76 287 72 Z"></path><path fill="#434348" d="M 243 95 L 247 99 243 103 239 99 Z"></path><path fill="#434348" d="M 196 122 L 200 126 196 130 192 126 Z"></path><path fill="#434348" d="M 148 149 L 152 153 148 157 144 153 Z"></path><path fill="#434348" d="M 100.17429193899783 176 L 104.17429193899783 180 100.17429193899783 184 96.17429193899783 180 Z" stroke-width="1"></path><path fill="#434348" d="M 52.24400871459696 176 L 56.24400871459696 180 52.24400871459696 184 48.24400871459696 180 Z" stroke-width="1"></path><path fill="#434348" d="M 4 176 L 8 180 4 184 0 180 Z"></path></g></g><text x="262" text-anchor="middle" class="highcharts-title" zIndex="4" style="color:#333333;font-size:18px;fill:#333333;width:459px;" y="25"><tspan>Densité de puissance</tspan></text><text x="262" text-anchor="middle" class="highcharts-subtitle" zIndex="4" style="color:#555555;fill:#555555;width:459px;" y="53"><tspan>Mesurée à 1.125 ?</tspan></text><g class="highcharts-legend" zIndex="7" transform="translate(185,364)"><g zIndex="1"><g><g class="highcharts-legend-item" zIndex="1" transform="translate(8,3)"><path fill="none" d="M 0 11 L 16 11" stroke="#7cb5ec" stroke-width="2"></path><path fill="#7cb5ec" d="M 8 7 C 13.328 7 13.328 15 8 15 C 2.6719999999999997 15 2.6719999999999997 7 8 7 Z"></path><text x="21" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2" y="15">1.125</text></g><g class="highcharts-legend-item" zIndex="1" transform="translate(84.359375,3)"><path fill="none" d="M 0 11 L 16 11" stroke="#434348" stroke-width="2"></path><path fill="#434348" d="M 8 7 L 12 11 8 15 4 11 Z"></path><text x="21" y="15" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2">Linéaire</text></g></g></g></g><g class="highcharts-axis-labels highcharts-xaxis-labels" zIndex="7"><text x="77.31372549019608" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="316" opacity="1">0</text><text x="173.17429193899784" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="316" opacity="1">2</text><text x="269.03485838779955" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="316" opacity="1">4</text><text x="364.8954248366013" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="316" opacity="1">6</text><text x="460.75599128540307" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="316" opacity="1">8</text></g><g class="highcharts-axis-labels highcharts-yaxis-labels" zIndex="7"><text x="58" text-anchor="end" style="width:153px;color:#606060;cursor:default;font-size:11px;fill:#606060;" y="299.5" opacity="1">-10</text><text x="58" text-anchor="end" style="width:153px;color:#606060;cursor:default;font-size:11px;fill:#606060;" y="254.5" opacity="1">0</text><text x="58" text-anchor="end" style="width:153px;color:#606060;cursor:default;font-size:11px;fill:#606060;" y="209.5" opacity="1">10</text><text x="58" text-anchor="end" style="width:153px;color:#606060;cursor:default;font-size:11px;fill:#606060;" y="164.5" opacity="1">20</text><text x="58" text-anchor="end" style="width:153px;color:#606060;cursor:default;font-size:11px;fill:#606060;" y="119.5" opacity="1">30</text><text x="58" text-anchor="end" style="width:153px;color:#606060;cursor:default;font-size:11px;fill:#606060;" y="74.5" opacity="1">40</text></g><g class="highcharts-tooltip" zIndex="8" style="cursor:default;padding:0;white-space:nowrap;" transform="translate(79,-9999)" opacity="0" visibility="visible"><path fill="none" d="M 3.5 0.5 L 88.5 0.5 C 91.5 0.5 91.5 0.5 91.5 3.5 L 91.5 47.5 C 91.5 50.5 91.5 50.5 88.5 50.5 L 52.5 50.5 46.5 56.5 40.5 50.5 3.5 50.5 C 0.5 50.5 0.5 50.5 0.5 47.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)" width="91" height="50"></path><path fill="none" d="M 3.5 0.5 L 88.5 0.5 C 91.5 0.5 91.5 0.5 91.5 3.5 L 91.5 47.5 C 91.5 50.5 91.5 50.5 88.5 50.5 L 52.5 50.5 46.5 56.5 40.5 50.5 3.5 50.5 C 0.5 50.5 0.5 50.5 0.5 47.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)" width="91" height="50"></path><path fill="none" d="M 3.5 0.5 L 88.5 0.5 C 91.5 0.5 91.5 0.5 91.5 3.5 L 91.5 47.5 C 91.5 50.5 91.5 50.5 88.5 50.5 L 52.5 50.5 46.5 56.5 40.5 50.5 3.5 50.5 C 0.5 50.5 0.5 50.5 0.5 47.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)" width="91" height="50"></path><path fill="rgba(249, 249, 249, .85)" d="M 3.5 0.5 L 88.5 0.5 C 91.5 0.5 91.5 0.5 91.5 3.5 L 91.5 47.5 C 91.5 50.5 91.5 50.5 88.5 50.5 L 52.5 50.5 46.5 56.5 40.5 50.5 3.5 50.5 C 0.5 50.5 0.5 50.5 0.5 47.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#434348" stroke-width="1"></path><text x="8" zIndex="1" style="font-size:12px;color:#333333;fill:#333333;" y="21"><tspan style="font-weight:bold">Linéaire</tspan><tspan x="8" dy="16">1 kW : 0 m/s</tspan></text></g><text x="513" text-anchor="end" zIndex="8" style="cursor:pointer;color:#909090;font-size:9px;fill:#909090;" y="395">Highcharts.com</text></svg></div></div>
                                    <span class="btn btn-info btn-xs pull-left" id="displayTab1"><span class="glyphicon glyphicon-plus"></span>Afficher/Masquer tableau</span>
                                        <table id="tab1" class="table table-striped table-condensed">
                                                <tbody><tr>
                                                        <th>Vitesse stabilisée [m/s]</th>
                                                        <th>Weibull à l'altitude du site [%]</th>
                                                        <th>Weibull à la hauteur du moyeu [%]</th>
                                                </tr>
                                                <tr><td>0</td><td></td><td></td></tr>
                                                <tr><td>1</td><td></td><td></td></tr>
                                                <tr><td>2</td><td></td><td></td></tr>
                                                <tr><td>3</td><td></td><td></td></tr>
                                                <tr><td>4</td><td></td><td></td></tr>
                                                <tr><td>5</td><td></td><td></td></tr>
                                                <tr><td>6</td><td></td><td></td></tr>
                                                <tr><td>7</td><td></td><td></td></tr>
                                                <tr><td>8</td><td></td><td></td></tr>
                                                <tr><td>9</td><td></td><td></td></tr>
                                                <tr><td>10</td><td></td><td></td></tr>
                                                <tr><td>11</td><td></td><td></td></tr>
                                                <tr><td>12</td><td></td><td></td></tr>
                                                <tr><td>13</td><td></td><td></td></tr>
                                                <tr><td>14</td><td></td><td></td></tr>
                                                <tr><td>15</td><td></td><td></td></tr>
                                                <tr><td>16</td><td></td><td></td></tr>
                                                <tr><td>17</td><td></td><td></td></tr>
                                                <tr><td>18</td><td></td><td></td></tr>
                                                <tr><td>19</td><td></td><td></td></tr>
                                                <tr><td>20</td><td></td><td></td></tr>
                                                <tr><td>21</td><td></td><td></td></tr>
                                                <tr><td>22</td><td></td><td></td></tr>
                                                <tr><td>23</td><td></td><td></td></tr>
                                                <tr><td>24</td><td></td><td></td></tr>
                                                <tr><td>25</td><td></td><td></td></tr>
                                                <tr><td>26</td><td></td><td></td></tr>
                                                <tr><td>27</td><td></td><td></td></tr>
                                                <tr><td>28</td><td></td><td></td></tr>
                                                <tr><td>29</td><td></td><td></td></tr>
                                                <tr><td>30</td><td></td><td></td></tr>
                                        </tbody></table>
                                 </div>
                            </div>
                        </div>
                     
                    <div class="lead col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">Caractérisation de l'éolienne</div>
                                <div class="panel-body">

                                    <span class="btn btn-info btn-xs pull-left" id="displayTab2"><span class="glyphicon glyphicon-plus"></span>Afficher / masquer tableau</span>
                                    <br><table id="tab2" class="table table-striped table-condensed">
                                            <tbody><tr>
                                                    <th>Vitesse stabilisée [m/s]</th>
                                                    <th>Puissance [kW]</th>
                                                    <th>Cp</th>
                                            </tr>
                                            <tr><td>0</td><td></td><td></td></tr>
                                            <tr><td>1</td><td></td><td></td></tr>
                                            <tr><td>2</td><td></td><td></td></tr>
                                            <tr><td>3</td><td></td><td></td></tr>
                                            <tr><td>4</td><td></td><td></td></tr>
                                            <tr><td>5</td><td></td><td></td></tr>
                                            <tr><td>6</td><td></td><td></td></tr>
                                            <tr><td>7</td><td></td><td></td></tr>
                                            <tr><td>8</td><td></td><td></td></tr>
                                            <tr><td>9</td><td></td><td></td></tr>
                                            <tr><td>10</td><td></td><td></td></tr>
                                            <tr><td>11</td><td></td><td></td></tr>
                                            <tr><td>12</td><td></td><td></td></tr>
                                            <tr><td>13</td><td></td><td></td></tr>
                                            <tr><td>14</td><td></td><td></td></tr>
                                            <tr><td>15</td><td></td><td></td></tr>
                                            <tr><td>16</td><td></td><td></td></tr>
                                            <tr><td>17</td><td></td><td></td></tr>
                                            <tr><td>18</td><td></td><td></td></tr>
                                            <tr><td>19</td><td></td><td></td></tr>
                                            <tr><td>20</td><td></td><td></td></tr>
                                            <tr><td>21</td><td></td><td></td></tr>
                                            <tr><td>22</td><td></td><td></td></tr>
                                            <tr><td>23</td><td></td><td></td></tr>
                                            <tr><td>24</td><td></td><td></td></tr>
                                            <tr><td>25</td><td></td><td></td></tr>
                                            <tr><td>26</td><td></td><td></td></tr>
                                            <tr><td>27</td><td></td><td></td></tr>
                                            <tr><td>28</td><td></td><td></td></tr>
                                            <tr><td>29</td><td></td><td></td></tr>
                                            <tr><td>30</td><td></td><td></td></tr>
                                    </tbody></table>
                             </div>
                        </div>
                    </div>
                 </div>
                
                  <div class="row">
                    <div class="lead col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">Puissance produite</div>
                                <div class="panel-body">

                                    <span class="btn btn-info btn-xs pull-left" id="displayTab3"><span class="glyphicon glyphicon-plus"></span>Afficher / masquer tableau</span>
                                    <br><table id="tab3" class="table table-striped table-condensed nodisplay">
                                            <tbody><tr>
                                                    <th>Vitesse stabilisée [m/s]</th>
                                                    <th>Puissance produite [kW]</th>
                                            </tr>
                                            <tr><td>0</td><td></td></tr>
                                            <tr><td>1</td><td></td></tr>
                                            <tr><td>2</td><td></td></tr>
                                            <tr><td>3</td><td></td></tr>
                                            <tr><td>4</td><td></td></tr>
                                            <tr><td>5</td><td></td></tr>
                                            <tr><td>6</td><td></td></tr>
                                            <tr><td>7</td><td></td></tr>
                                            <tr><td>8</td><td></td></tr>
                                            <tr><td>9</td><td></td></tr>
                                            <tr><td>10</td><td></td></tr>
                                            <tr><td>11</td><td></td></tr>
                                            <tr><td>12</td><td></td></tr>
                                            <tr><td>13</td><td></td></tr>
                                            <tr><td>14</td><td></td></tr>
                                            <tr><td>15</td><td></td></tr>
                                            <tr><td>16</td><td></td></tr>
                                            <tr><td>17</td><td></td></tr>
                                            <tr><td>18</td><td></td></tr>
                                            <tr><td>19</td><td></td></tr>
                                            <tr><td>20</td><td></td></tr>
                                            <tr><td>21</td><td></td></tr>
                                            <tr><td>22</td><td></td></tr>
                                            <tr><td>23</td><td></td></tr>
                                            <tr><td>24</td><td></td></tr>
                                            <tr><td>25</td><td></td></tr>
                                            <tr><td>26</td><td></td></tr>
                                            <tr><td>27</td><td></td></tr>
                                            <tr><td>28</td><td></td></tr>
                                            <tr><td>29</td><td></td></tr>
                                            <tr><td>30</td><td></td></tr>
                                    </tbody></table>
                                </div>
                        </div>
                    </div>
                    
                    <div class="lead col-sm-6">
                       <div class="panel panel-default">
                            <div class="panel-heading">Densité de puissance</div>
                            <div class="panel-body">

                                    <span class="btn btn-info btn-xs pull-left" id="displayTab4"><span class="glyphicon glyphicon-plus"></span>Afficher / masquer tableau</span>
                                    <br><table id="tab4" class="table table-striped table-condensed nodisplay">
                                            <tbody><tr>
                                                    <th>Vitesse stabilisée [m/s]</th>
                                                    <th>Densité de puissance en entrée [w/m<sup>2</sup>]</th>
                                                    <th>Densité de puissance en entrée avec limite de Betz [w/m<sup>2</sup>]</th>
                                                    <th>Densité de puissance en sortie [w/m<sup>2</sup>]</th>
                                            </tr>
<?php for ($i = 0; $i < 301; $i++) : ?>
                                            <tr><td><?php echo $i ?></td><td><?php echo $density_input[$i] ?></td><td></td><td><?php echo $density_input[$i] ?></td></tr>
<?php endfor ?>
                                    </tbody></table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    
                </div>
                
            </div>
        </div>

<!-------------------------------------------------------------------------JavaScript------------------------------------------------------------>

<script type="text/javascript">

$(function () {
		$('#displayTab1').click(function() {
                    $('#tab1').css('display') === 'none' ? $('#tab1').css({'display': 'inline'}) : $('#tab1').css({'display': 'none'});
                });
                $('#displayTab2').click(function() {
                    $('#tab2').css('display') === 'none' ? $('#tab2').css({'display': 'inline'}) : $('#tab2').css({'display': 'none'});
                });
                $('#displayTab3').click(function() {
                    $('#tab3').css('display') === 'none' ? $('#tab3').css({'display': 'inline'}) : $('#tab3').css({'display': 'none'});
                });
                $('#displayTab4').click(function() {
                    $('#tab4').css('display') === 'none' ? $('#tab4').css({'display': 'inline'}) : $('#tab4').css({'display': 'none'});
                });
                
            });
                

     
</script>