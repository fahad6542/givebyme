<!-- START BREADCRUMB -->
<ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Edit Project: <strong><?php echo $project['title']; ?> </strong></li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
        <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default tabs">
                                <?php echo $nav_tabs;?>
                            
                        <form method="post" role="form" id="form_project" action="<?php echo base_url(); ?>UserProjects/update/<?php echo $project['pid']; ?>" class="form-horizontal" enctype="multipart/form-data">
                                <div class="panel panel-default tabs">
                                        <div class="panel-body tab-content">
                                                <div class="tab-pane active" id="tab-first">
                                                        <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Project Name</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                        <input type="text" class="form-control" name="title" required value="<?php echo $project['title']; ?>"/>
                                                                        <span class="help-block"><?= form_error('title') ?></span>
                                                                </div>
                                                        </div>
                                                        <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Project Description</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                        <textarea class="form-control" name="description" rows="5" cols="150" required><?php echo $project['description']; ?></textarea>
                                                                        <span class="help-block"><?= form_error('description') ?></span>
                                                                </div>
                                                        </div>

                                                        <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Industries</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                        <!-- <input type="text" class="tagsinput" value="First,Second,Third" /> -->
                                                                        <select class="industries form-control" name="industries[]" multiple="multiple" required>
                                                                                <?php foreach ($industries as $key => $industry) : ?>
                                                                                <option value="<?php echo $industry['iid'] ?>"><?php echo $industry['industryName'] ?></option>
                                                                                <?php endforeach; ?>
                                                                        </select>
                                                                        <?php 
                                                                $selectedIds = $project['industries'];
                                                                $selectedIds = explode(",", $selectedIds);
                                                                                // print_r($selectedIds);
                                                                ?>
                                                                        <script>
                                                                                var ids = new Array();
                                                                                var pausecontent = new Array();
                                                                                <?php foreach ($selectedIds as $key => $val) { ?>
                                                                                        ids.push('<?php echo $val; ?>');
                                                                                <?php 
                                                                } ?>
                                                                                console.log(ids);
                                                                                setTimeout(function(){
                                                                                        $('.industries').val(ids);
                                                                                        console.log(1);
                                                                                }, 5000);
                                                                        </script>
                                                                        <span class="help-block"><?= form_error('industries') ?></span>
                                                                </div>
                                                        </div>

                                                        <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label">Location</label>
                    <div class="col-md-6 col-xs-12">
                        <input type="text" class="form-control" name="location" required value="<?php echo $project['country']; ?>"/>
                        <span class="help-block"><?= form_error('location') ?></span>
                    </div>
                                                        </div>

                                                        <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Country</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                        <select class="form-control select" name="country" required>
                                                                                <option value="Afghanistan">Afghanistan</option>
                                                                                <option value="Albania">Albania</option>
                                                                                <option value="Algeria">Algeria</option>
                                                                                <option value="American Samoa">American Samoa</option>
                                                                                <option value="Andorra">Andorra</option>
                                                                                <option value="Angola">Angola</option>
                                                                                <option value="Anguilla">Anguilla</option>
                                                                                <option value="Antartica">Antarctica</option>
                                                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                                                <option value="Argentina">Argentina</option>
                                                                                <option value="Armenia">Armenia</option>
                                                                                <option value="Aruba">Aruba</option>
                                                                                <option value="Australia">Australia</option>
                                                                                <option value="Austria">Austria</option>
                                                                                <option value="Azerbaijan">Azerbaijan</option>
                                                                                <option value="Bahamas">Bahamas</option>
                                                                                <option value="Bahrain">Bahrain</option>
                                                                                <option value="Bangladesh">Bangladesh</option>
                                                                                <option value="Barbados">Barbados</option>
                                                                                <option value="Belarus">Belarus</option>
                                                                                <option value="Belgium">Belgium</option>
                                                                                <option value="Belize">Belize</option>
                                                                                <option value="Benin">Benin</option>
                                                                                <option value="Bermuda">Bermuda</option>
                                                                                <option value="Bhutan">Bhutan</option>
                                                                                <option value="Bolivia">Bolivia</option>
                                                                                <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                                                                <option value="Botswana">Botswana</option>
                                                                                <option value="Bouvet Island">Bouvet Island</option>
                                                                                <option value="Brazil">Brazil</option>
                                                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                                                <option value="Bulgaria">Bulgaria</option>
                                                                                <option value="Burkina Faso">Burkina Faso</option>
                                                                                <option value="Burundi">Burundi</option>
                                                                                <option value="Cambodia">Cambodia</option>
                                                                                <option value="Cameroon">Cameroon</option>
                                                                                <option value="Canada">Canada</option>
                                                                                <option value="Cape Verde">Cape Verde</option>
                                                                                <option value="Cayman Islands">Cayman Islands</option>
                                                                                <option value="Central African Republic">Central African Republic</option>
                                                                                <option value="Chad">Chad</option>
                                                                                <option value="Chile">Chile</option>
                                                                                <option value="China">China</option>
                                                                                <option value="Christmas Island">Christmas Island</option>
                                                                                <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                                                                <option value="Colombia">Colombia</option>
                                                                                <option value="Comoros">Comoros</option>
                                                                                <option value="Congo">Congo</option>
                                                                                <option value="Congo">Congo, the Democratic Republic of the</option>
                                                                                <option value="Cook Islands">Cook Islands</option>
                                                                                <option value="Costa Rica">Costa Rica</option>
                                                                                <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                                                                <option value="Croatia">Croatia (Hrvatska)</option>
                                                                                <option value="Cuba">Cuba</option>
                                                                                <option value="Cyprus">Cyprus</option>
                                                                                <option value="Czech Republic">Czech Republic</option>
                                                                                <option value="Denmark">Denmark</option>
                                                                                <option value="Djibouti">Djibouti</option>
                                                                                <option value="Dominica">Dominica</option>
                                                                                <option value="Dominican Republic">Dominican Republic</option>
                                                                                <option value="East Timor">East Timor</option>
                                                                                <option value="Ecuador">Ecuador</option>
                                                                                <option value="Egypt">Egypt</option>
                                                                                <option value="El Salvador">El Salvador</option>
                                                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                                <option value="Eritrea">Eritrea</option>
                                                                                <option value="Estonia">Estonia</option>
                                                                                <option value="Ethiopia">Ethiopia</option>
                                                                                <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                                                                <option value="Faroe Islands">Faroe Islands</option>
                                                                                <option value="Fiji">Fiji</option>
                                                                                <option value="Finland">Finland</option>
                                                                                <option value="France">France</option>
                                                                                <option value="France Metropolitan">France, Metropolitan</option>
                                                                                <option value="French Guiana">French Guiana</option>
                                                                                <option value="French Polynesia">French Polynesia</option>
                                                                                <option value="French Southern Territories">French Southern Territories</option>
                                                                                <option value="Gabon">Gabon</option>
                                                                                <option value="Gambia">Gambia</option>
                                                                                <option value="Georgia">Georgia</option>
                                                                                <option value="Germany">Germany</option>
                                                                                <option value="Ghana">Ghana</option>
                                                                                <option value="Gibraltar">Gibraltar</option>
                                                                                <option value="Greece">Greece</option>
                                                                                <option value="Greenland">Greenland</option>
                                                                                <option value="Grenada">Grenada</option>
                                                                                <option value="Guadeloupe">Guadeloupe</option>
                                                                                <option value="Guam">Guam</option>
                                                                                <option value="Guatemala">Guatemala</option>
                                                                                <option value="Guinea">Guinea</option>
                                                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                                <option value="Guyana">Guyana</option>
                                                                                <option value="Haiti">Haiti</option>
                                                                                <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                                                                <option value="Holy See">Holy See (Vatican City State)</option>
                                                                                <option value="Honduras">Honduras</option>
                                                                                <option value="Hong Kong">Hong Kong</option>
                                                                                <option value="Hungary">Hungary</option>
                                                                                <option value="Iceland">Iceland</option>
                                                                                <option value="India">India</option>
                                                                                <option value="Indonesia">Indonesia</option>
                                                                                <option value="Iran">Iran (Islamic Republic of)</option>
                                                                                <option value="Iraq">Iraq</option>
                                                                                <option value="Ireland">Ireland</option>
                                                                                <option value="Israel">Israel</option>
                                                                                <option value="Italy">Italy</option>
                                                                                <option value="Jamaica">Jamaica</option>
                                                                                <option value="Japan">Japan</option>
                                                                                <option value="Jordan">Jordan</option>
                                                                                <option value="Kazakhstan">Kazakhstan</option>
                                                                                <option value="Kenya">Kenya</option>
                                                                                <option value="Kiribati">Kiribati</option>
                                                                                <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                                                                                <option value="Korea">Korea, Republic of</option>
                                                                                <option value="Kuwait">Kuwait</option>
                                                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                                <option value="Lao">Lao People's Democratic Republic</option>
                                                                                <option value="Latvia">Latvia</option>
                                                                                <option value="Lebanon" selected>Lebanon</option>
                                                                                <option value="Lesotho">Lesotho</option>
                                                                                <option value="Liberia">Liberia</option>
                                                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                                                <option value="Liechtenstein">Liechtenstein</option>
                                                                                <option value="Lithuania">Lithuania</option>
                                                                                <option value="Luxembourg">Luxembourg</option>
                                                                                <option value="Macau">Macau</option>
                                                                                <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                                                                <option value="Madagascar">Madagascar</option>
                                                                                <option value="Malawi">Malawi</option>
                                                                                <option value="Malaysia">Malaysia</option>
                                                                                <option value="Maldives">Maldives</option>
                                                                                <option value="Mali">Mali</option>
                                                                                <option value="Malta">Malta</option>
                                                                                <option value="Marshall Islands">Marshall Islands</option>
                                                                                <option value="Martinique">Martinique</option>
                                                                                <option value="Mauritania">Mauritania</option>
                                                                                <option value="Mauritius">Mauritius</option>
                                                                                <option value="Mayotte">Mayotte</option>
                                                                                <option value="Mexico">Mexico</option>
                                                                                <option value="Micronesia">Micronesia, Federated States of</option>
                                                                                <option value="Moldova">Moldova, Republic of</option>
                                                                                <option value="Monaco">Monaco</option>
                                                                                <option value="Mongolia">Mongolia</option>
                                                                                <option value="Montserrat">Montserrat</option>
                                                                                <option value="Morocco">Morocco</option>
                                                                                <option value="Mozambique">Mozambique</option>
                                                                                <option value="Myanmar">Myanmar</option>
                                                                                <option value="Namibia">Namibia</option>
                                                                                <option value="Nauru">Nauru</option>
                                                                                <option value="Nepal">Nepal</option>
                                                                                <option value="Netherlands">Netherlands</option>
                                                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                                                <option value="New Caledonia">New Caledonia</option>
                                                                                <option value="New Zealand">New Zealand</option>
                                                                                <option value="Nicaragua">Nicaragua</option>
                                                                                <option value="Niger">Niger</option>
                                                                                <option value="Nigeria">Nigeria</option>
                                                                                <option value="Niue">Niue</option>
                                                                                <option value="Norfolk Island">Norfolk Island</option>
                                                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                                                <option value="Norway">Norway</option>
                                                                                <option value="Oman">Oman</option>
                                                                                <option value="Pakistan">Pakistan</option>
                                                                                <option value="Palau">Palau</option>
                                                                                <option value="Panama">Panama</option>
                                                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                                                <option value="Paraguay">Paraguay</option>
                                                                                <option value="Peru">Peru</option>
                                                                                <option value="Philippines">Philippines</option>
                                                                                <option value="Pitcairn">Pitcairn</option>
                                                                                <option value="Poland">Poland</option>
                                                                                <option value="Portugal">Portugal</option>
                                                                                <option value="Puerto Rico">Puerto Rico</option>
                                                                                <option value="Qatar">Qatar</option>
                                                                                <option value="Reunion">Reunion</option>
                                                                                <option value="Romania">Romania</option>
                                                                                <option value="Russia">Russian Federation</option>
                                                                                <option value="Rwanda">Rwanda</option>
                                                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                                                <option value="Saint LUCIA">Saint LUCIA</option>
                                                                                <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                                                                <option value="Samoa">Samoa</option>
                                                                                <option value="San Marino">San Marino</option>
                                                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                                                <option value="Senegal">Senegal</option>
                                                                                <option value="Seychelles">Seychelles</option>
                                                                                <option value="Sierra">Sierra Leone</option>
                                                                                <option value="Singapore">Singapore</option>
                                                                                <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                                                                <option value="Slovenia">Slovenia</option>
                                                                                <option value="Solomon Islands">Solomon Islands</option>
                                                                                <option value="Somalia">Somalia</option>
                                                                                <option value="South Africa">South Africa</option>
                                                                                <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                                                                <option value="Span">Spain</option>
                                                                                <option value="SriLanka">Sri Lanka</option>
                                                                                <option value="St. Helena">St. Helena</option>
                                                                                <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                                                                <option value="Sudan">Sudan</option>
                                                                                <option value="Suriname">Suriname</option>
                                                                                <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                                                                <option value="Swaziland">Swaziland</option>
                                                                                <option value="Sweden">Sweden</option>
                                                                                <option value="Switzerland">Switzerland</option>
                                                                                <option value="Syria">Syrian Arab Republic</option>
                                                                                <option value="Taiwan">Taiwan, Province of China</option>
                                                                                <option value="Tajikistan">Tajikistan</option>
                                                                                <option value="Tanzania">Tanzania, United Republic of</option>
                                                                                <option value="Thailand">Thailand</option>
                                                                                <option value="Togo">Togo</option>
                                                                                <option value="Tokelau">Tokelau</option>
                                                                                <option value="Tonga">Tonga</option>
                                                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                                                <option value="Tunisia">Tunisia</option>
                                                                                <option value="Turkey">Turkey</option>
                                                                                <option value="Turkmenistan">Turkmenistan</option>
                                                                                <option value="Turks and Caicos">Turks and Caicos Islands</option>
                                                                                <option value="Tuvalu">Tuvalu</option>
                                                                                <option value="Uganda">Uganda</option>
                                                                                <option value="Ukraine">Ukraine</option>
                                                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                                                <option value="United Kingdom">United Kingdom</option>
                                                                                <option value="United States">United States</option>
                                                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                                                <option value="Uruguay">Uruguay</option>
                                                                                <option value="Uzbekistan">Uzbekistan</option>
                                                                                <option value="Vanuatu">Vanuatu</option>
                                                                                <option value="Venezuela">Venezuela</option>
                                                                                <option value="Vietnam">Viet Nam</option>
                                                                                <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                                                                <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                                                                <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                                                                <option value="Western Sahara">Western Sahara</option>
                                                                                <option value="Yemen">Yemen</option>
                                                                                <option value="Yugoslavia">Yugoslavia</option>
                                                                                <option value="Zambia">Zambia</option>
                                                                                <option value="Zimbabwe">Zimbabwe</option>
                                                                        </select>
                                                                        <span class="help-block"><?= form_error('country') ?></span>
                                                                </div>
                                                        </div>

                                                        <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label">Partner</label>
                    <div class="col-md-6 col-xs-12">
                        <input type="text" class="form-control" name="partner" required value="<?php echo $project['partner']; ?>"/>
                        <span class="help-block"><?= form_error('partner') ?></span>
                    </div>
                </div>

                                                        <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label">Asset class</label>
                    <div class="col-md-6 col-xs-12">
                        <input type="text" class="form-control" name="assetClass" required value="<?php echo $project['assetClass']; ?>"/>
                        <span class="help-block"><?= form_error('assetClass') ?></span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label">Contractor</label>
                    <div class="col-md-6 col-xs-12">
                        <input type="text" class="form-control" name="contractor" required value="<?php echo $project['contractor']; ?>"/>
                        <span class="help-block"><?= form_error('contractor') ?></span>
                    </div>
                                                        </div>

                                                        <!-- <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Project Main Image</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                        <div class="panel panel-default">
                                                                                <div class="panel-body">
                                                                                        <h3><span class="fa fa-download"></span> Project Main Image</h3>
                                                                                        <form action="#" class="dropzone"></form>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div> -->

                                                        <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Project Images</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                        <div class="panel panel-default">
                                                                                <div class="panel-body">
                                                                                        <!-- <h3><span class="fa fa-download"></span>Add more project images </h3>
                                                                                        <form action="#" class="dropzone"></form> -->
                                                                                        <input type="file" class="form-control" name="projectImages[]" multiple="multiple" required/>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>

                                                <!-- </div>
                                                <div class="tab-pane" id="tab-second"> -->
                                                        <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Reservation Type</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                        <input type="text" class="form-control" name="investmentType" required value="<?php echo $project['investmentType']; ?>" />
                                                                        <span class="help-block"><?= form_error('investmentType') ?></span>
                                                                </div>
                                                        </div>

                                                        <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label">Reservation Category</label>
                    <div class="col-md-6 col-xs-12">
                        <input type="text" class="form-control" name="investmentCategory" required value="<?php echo $project['investmentCategory']; ?>" />
                        <span class="help-block"><?= form_error('investmentCategory') ?></span>
                    </div>
                                                        </div>

                                                        <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Project Value</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                        <input type="number" class="form-control" name="projectValue" required value="<?php echo $project['projectValue']; ?>"/>
                                                                        <span class="help-block"><?= form_error('projectValue') ?></span>
                                                                </div>
                                                        </div>

                                                        <!-- <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Estimated Return</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                        <input type="number" class="form-control" name="estimatedReturn" required value="<?php echo $project['estimatedReturn']; ?>"/>
                                                                        <span class="help-block"><?= form_error('estimatedReturn') ?></span>
                                                                </div>
                                                        </div> -->
                                                        <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Minimum Reservation</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                        <input type="number" class="form-control" name="minimumInvestment" required value="<?php echo $project['minimumInvestment']; ?>"/>
                                                                        <span class="help-block"><?= form_error('minimumInvestment') ?></span>
                                                                </div>
                                                        </div>

                                                        <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label">Maximum Reservation</label>
                    <div class="col-md-6 col-xs-12">
                        <input type="number" class="form-control" name="maximumInvestments" required value="<?php echo $project['maximumInvestments']; ?>"/>
                        <span class="help-block"><?= form_error('maximumInvestments') ?></span>
                    </div>
                                                        </div>

                                                        <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Dividend Basis</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                        <input type="text" class="form-control" name="dividendBasis" value="<?php echo $project['dividendBasis']; ?>"/>
                                                                </div>
                                                        </div>
                                                        <!-- <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Area</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                        <input type="text" class="form-control" />
                                                                </div>
                                                        </div> -->
                                                        <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Payment Mode</label>
                                                        <div class="col-md-6 col-xs-12">
                                                                <label class="check"><input type="checkbox" class="icheckbox" checked="checked" name="paymentMethod[]"/>Credit Card</label>
                                                                <label class="check"><input type="checkbox" class="icheckbox" checked="checked" name="paymentMethod[]"/>PayPal</label>
                                                        </div>
                                                </div>
                                                <!-- </div>
                                                <div class="tab-pane" id="tab-third"> -->
                                                        <!--<div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Number Of Rooms</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                        <input type="number" class="form-control" name="numberOfRooms" value="<?php echo $project['numberOfRooms']; ?>"/>
                                                                </div>
                                                        </div>-->
                                                        <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Year Of Construction</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                        <input type="number" class="form-control" name="yearOfConstruction" required value="<?php echo $project['yearOfConstruction']; ?>"/>
                                                                        <span class="help-block"><?= form_error('yearOfConstruction') ?></span>
                                                                </div>
                                                        </div>
                                                        <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Year Of Re-Construction</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                        <input type="number" class="form-control" name="yearOfReConstruction" value="<?php echo $project['yearOfReConstruction']; ?>"/>
                                                                </div>
                                                        </div>

                                                        <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label">Duration for complete</label>
                    <div class="col-md-6 col-xs-12">
                        <input type="text" class="form-control" name="durationForComplete" required value="<?php echo $project['durationForComplete']; ?>"/>
                        <span class="help-block"><?= form_error('durationForComplete') ?></span>
                    </div>
                                                        </div>

                                                        <!--<div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Celling Height</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                        <input type="number" class="form-control" name="cellingHeight" value="<?php echo $project['cellingHeight']; ?>"/>
                                                                </div>
                                                        </div>
                                                        <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">No. Of Floors</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                        <input type="number" class="form-control" name="noOfFloors" value="<?php echo $project['noOfFloors']; ?>" />
                                                                </div>
                                                        </div>-->
                                                        <h4>Past Earnings</h4>
                <br>
                <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label">1st year Gross Revenue</label>
                    <div class="col-md-6 col-xs-12">
                        <input type="number" class="form-control" name="yieldFor1stYear" value="<?php echo $project['yieldFor1stYear']; ?>"  onkeyup="this.value = minmax(this.value, 0, 100)"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label">2nd year Gross Revenue</label>
                    <div class="col-md-6 col-xs-12">
                        <input type="number" class="form-control" name="yieldFor2ndYear" value="<?php echo $project['yieldFor2ndYear']; ?>" onkeyup="this.value = minmax(this.value, 0, 100)"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label">3rd year Gross Revenue</label>
                    <div class="col-md-6 col-xs-12">
                        <input type="number" class="form-control" name="yieldFor3rdYear" value="<?php echo $project['yieldFor3rdYear']; ?>" onkeyup="this.value = minmax(this.value, 0, 100)"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label">Projected IRR</label>
                    <div class="col-md-6 col-xs-12">
                        <input type="number" class="form-control" name="projectedIRR" value="<?php echo $project['projectedIRR']; ?>" onkeyup="this.value = minmax(this.value, 0, 100)"/>
                    </div>
                </div>

                <h4>Past Profit</h4>
                <br>
                <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label">1st year Net Income</label>
                    <div class="col-md-6 col-xs-12">
                        <input type="number" class="form-control" name="grossIncome" value="<?php echo $project['grossIncome']; ?>" onkeyup="this.value = minmax(this.value, 0, 100)"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label">2nd year Net Income</label>
                    <div class="col-md-6 col-xs-12">
                        <input type="number" class="form-control" name="netIncom" value="<?php echo $project['netIncom']; ?>" onkeyup="this.value = minmax(this.value, 0, 100)"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label">3rd year Net Income</label>
                    <div class="col-md-6 col-xs-12">
                        <input type="number" class="form-control" name="totalExpenses" value="<?php echo $project['totalExpenses']; ?>" onkeyup="this.value = minmax(this.value, 0, 100)" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label">Total dividend yield</label>
                    <div class="col-md-6 col-xs-12">
                        <input type="number" class="form-control" name="totalDividendYield" value="<?php echo $project['totalDividendYield']; ?>" onkeyup="this.value = minmax(this.value, 0, 100)" />
                    </div>
                </div>
                                                </div>
                                        </div>
                                        <div class="panel-footer">
                                            <a href="<?php echo base_url().'UserProjects/viewprojects';?>" title="Company" class="btn btn-primary " role="button">Back </a>
                                    <a href="<?php echo base_url().'#';?>" title="Don't Save" class="btn btn-primary pull-right left-gap" role="button">Next </a>
                    
                                                <button class="btn btn-primary pull-right">Update Project<span class="fa fa-floppy-o fa-right"></span></button>
                                        </div>
                                </div>
                        </form>
                    </div>
                    
                </div>
        </div>
</div>
<!-- END PAGE CONTENT WRAPPER -->
</div>
<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->