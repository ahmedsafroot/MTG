<!--Third Tab-->
<div class="tab animated">
      <div style="margin-left:5px">
        <p class="step_title">Market Leadership(Step 1-1)</p>
        <hr>
        <p class="descParagrah">
                In this part you identify the KEY factors that are important for the company to stay in competitive.
            </p>

        <p class="sectionTitle mt-4">Instructions</p>
        <hr>
        <ul class="descParagrah">
            <li>FOR EACH OF THE FOLLOWING FACTORS, PROVIDE A SCORE AS INDICATED. YOU MAY INCLUDE ADDITIONAL FACTORS, DELETE THOSE UNIMPORTANT AND ADD COMMENTS<li>
            <li>
                    GIVE SCORES REGARDING:
                <ul class="descParagrah">
                    <li>How it is important for (attractive to) CUSTOMERS, COMPANY</li>
                    <li>How you see your position in this against average of the industry</li>
                    <li>How difficult it is to maintain your position?</li>
                </ul>
            </li>
            <li>Then, state if it is a QULIFIER (basic condition) or WINNER (important advantage) for you</li>
            <li>Add any comment you may is needed</li>
        </ul>
      </div>
    <div class="ProductLines">
        <div class="container-fluid">
            <div class="row">
                <input type="hidden" value="11" id="count">
                <table class="table table-striped step3Table col-md-7" id="example">
                    <thead>
                        <tr>
                            <th scope="col" class="tableH boldText" width="25%">Differentiation factors
                            </th>
                            <th scope="col" class="tableH">Attractiveness to customer (Low:1 - High:5)
                                <span class="progressFactor col1">m</span>
                            </th>
                            <th scope="col" class="tableH">Compared to sector average (Bottom:1 - Top:5)
                                <span class="progressFactor col2">m</span>
                            </th>
                            <th scope="col" class="tableH">Effort in maintaining lead (Easy:5 - Hard:1)
                                <span class="progressFactor col3">m</span>
                            </th>
                            <th scope="col" class="tableH">Position (Qualifier:1 or Order winner:2)
                                <span class="progressFactor col4">m</span>
                            </th>
                            <th scope="col" class="tableH factors" style="width:30%;">Comments
                            </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <div class="field">
                            <tr id="field1">
                                <th scope="row" class="tableH factors">
                                    <textarea type="text" rows="3" cols="20" class="form-control market_textarea" name="factor1" readonly>(Price/Cost)Provide the lowest price, best value for money etc.</textarea>
                                </th>
                                <td><select name="x1" class="dataset" dataset="0">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                                <td><select name="y1" class="dataset" dataset="1">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                                <td><select name="z1" class="dataset" dataset="2">
    
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                </select></td>
                                <td><select name="k1" class="dataset" dataset="3">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
    
                                </select></td>
                                <td scope="row" class="tableH">
                                    <textarea type="text" class="form-control dynamicArea comments" name="comment1" onfocus="createTooltip(this)" onkeyup="theFocus(this);" onchange="theBlur()" title="">
                                </textarea>

                                </td>

                                <td id='delete-td1'>
                                    <button id="remove1" class="btn" onclick="deleteRow(this,1)">delete</button>
                                </td>

                            </tr>


                            <tr id="field2">
                                <th scope="row" class="tableH factors"><textarea type="text" rows="4" cols="15" class="form-control market_textarea" name="factor2" readonly>(Quality) Reliable products and services,Accreditations etc.
                                </textarea>
                                </th>
                                <td><select name="x2" class="dataset" dataset="0">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                                <td><select name="y2" class="dataset" dataset="1">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                                <td><select name="z2" class="dataset" dataset="2">
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                </select></td>
                                <td><select name="k2" class="dataset" dataset="3">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
    
                                </select></td>
                                <td scope="row" class="tableH">
                                    <textarea type="text" class="form-control dynamicArea comments" name="comment2" onfocus="createTooltip(this)" onkeyup="theFocus(this);" onchange="theBlur()" title="">
                                        </textarea>
                                </td>
                                <td id='delete-td2'>
                                    <button id="remove2" class="btn" onclick="deleteRow(this,2)">delete</button>
                                </td>
                            </tr>

                            <tr id="field3">
                                <th scope="row" class="tableH factors"><textarea type="text" rows="4" cols="15" class="form-control market_textarea" name="factor3" readonly>(Service) Responsive to customers problems,(e.g. Pre and Post Sales)
                               </textarea>
                                </th>
                                <td><select name="x3" class="dataset" dataset="0">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                                <td><select name="y3" class="dataset" dataset="1">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                                <td><select name="z3" class="dataset" dataset="2">
    
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                </select></td>
                                <td><select name="k3" class="dataset" dataset="3">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
    
                                </select></td>
                                <td scope="row" class="tableH">
                                    <textarea type="text" class="form-control dynamicArea comments" name="comment3" onfocus="createTooltip(this)" onkeyup="theFocus(this);" onchange="theBlur()" title="">
                                        </textarea>
                                </td>
                                <td id='delete-td3'>
                                    <button id="remove3" class="btn" onclick="deleteRow(this,3)">delete</button>
                                </td>
                            </tr>

                            <tr id="field4">
                                <th scope="row" class="tableH factors"><textarea type="text" rows="4" cols="15" class="form-control market_textarea" name="factor4" readonly>(Delivery/Cycle-time) Speedy turnaround time for products</textarea>
                                </th>

                                <td><select name="x4" class="dataset" dataset="0">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                                <td><select name="y4" class="dataset" dataset="1">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                                <td><select name="z4" class="dataset" dataset="2">
    
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                </select></td>
                                <td><select name="k4" class="dataset" dataset="3">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
    
                                </select></td>
                                <td scope="row" class="tableH">
                                    <textarea type="text" rows="3" cols="20" class="form-control dynamicArea comments" name="comment4" onfocus="createTooltip(this)" onkeyup="theFocus(this);" onchange="theBlur()" title=""></textarea>
                                </td>
                                <td id='delete-td4'>
                                    <button id="remove4" class="btn" onclick="deleteRow(this,4)">delete</button>
                                </td>
                            </tr>

                            <tr id="field5">
                                <th scope="row" class="tableH factors"><textarea type="text" rows="4" cols="15" class="form-control market_textarea" name="factor5" readonly>(Product Performance) renowned for high performance products </textarea>
                                </th>
                                <td><select name="x5" class="dataset" dataset="0">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                                <td><select name="y5" class="dataset" dataset="1">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                                <td><select name="z5" class="dataset" dataset="2">
    
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                </select></td>
                                <td><select name="k5" class="dataset" dataset="3">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
    
                                </select></td>
                                <td scope="row" class="tableH">
                                    <textarea type="text" class="form-control dynamicArea comments" name="comment5" onfocus="createTooltip(this)" onkeyup="theFocus(this);" onchange="theBlur()" title=""></textarea>
                                </td>
                                <td id='delete-td5'>
                                    <button id="remove5" class="btn" onclick="deleteRow(this,5)">delete</button>
                                </td>
                            </tr>

                            <tr id="field6">
                                <th scope="row" class="tableH factors"><textarea type="text" rows="4" cols="15" class="form-control market_textarea" name="factor6" readonly>(Product range) The best/widest product range </textarea>
                                </th>

                                <td><select name="x6" class="dataset" dataset="0">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                                <td><select name="y6" class="dataset" dataset="1">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                                <td><select name="z6" class="dataset" dataset="2">
    
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                </select></td>
                                <td><select name="k6" class="dataset" dataset="3">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
    
                                </select></td>
                                <td scope="row" class="tableH">
                                    <textarea type="text" rows="3" cols="20" class="form-control dynamicArea comments" name="comment6" onfocus="createTooltip(this)" onkeyup="theFocus(this);" onchange="theBlur()" title=""></textarea>
                                </td>
                                <td id='delete-td6'>
                                    <button id="remove6" class="btn" onclick="deleteRow(this,6)">delete</button>
                                </td>
                            </tr>

                            <tr id="field7">
                                <th scope="row" class="tableH factors"><textarea type="text" rows="4" cols="15" class="form-control market_textarea" name="factor7" readonly>(Flexibility) Flexible products, processes, services, customisation, etc.</textarea>
                                </th>

                                <td><select name="x7" class="dataset" dataset="0">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                                <td><select name="y7" class="dataset" dataset="1">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                                <td><select name="z7" class="dataset" dataset="2">
    
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                </select></td>
                                <td><select name="k7" class="dataset" dataset="3">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
    
                                </select></td>
                                <td scope="row" class="tableH">
                                    <textarea type="text" rows="3" cols="20" class="form-control dynamicArea comments" name="comment7" onfocus="createTooltip(this)" onkeyup="theFocus(this);" onchange="theBlur()" title=""></textarea>
                                </td>
                                <td id='delete-td7'>
                                    <button id="remove7" class="btn" onclick="deleteRow(this,7)">delete</button>
                                </td>
                            </tr>

                            <tr id="field8">
                                <th scope="row" class="tableH factors"><textarea type="text" rows="4" cols="15" class="form-control market_textarea" name="factor8" readonly>(Innovation) Known for innovation and new products
                                             </textarea>
                                </th>
                                <td><select name="x8" class="dataset" dataset="0">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                                <td><select name="y8" class="dataset" dataset="1">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                                <td><select name="z8" class="dataset" dataset="2">
    
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                </select></td>
                                <td><select name="k8" class="dataset" dataset="3">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
    
                                </select></td>
                                <td scope="row" class="tableH">
                                    <textarea type="text" rows="3" cols="20" class="form-control dynamicArea comments" name="comment8" onfocus="createTooltip(this)" onkeyup="theFocus(this);" onchange="theBlur()" title=""></textarea>
                                </td>
                                <td id='delete-td8'>
                                    <button id="remove8" class="btn" onclick="deleteRow(this,8)">delete</button>
                                </td>
                            </tr>

                            <tr id="field9">
                                <th scope="row" class="tableH factors"><textarea type="text" rows="4" cols="15" class="form-control market_textarea" name="factor9" readonly>
                                        (Marketplace) visibility Known in marketplace (brand visibility)
                                        </textarea>
                                </th>
                                <td><select name="x9" class="dataset" dataset="0">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                                <td><select name="y9" class="dataset" dataset="1">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                                <td><select name="z9" class="dataset" dataset="2">
    
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                </select></td>
                                <td><select name="k9" class="dataset" dataset="3">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
    
                                </select></td>
                                <td scope="row" class="tableH">
                                    <textarea type="text" rows="3" cols="20" class="form-control dynamicArea comments" name="comment9" onfocus="createTooltip(this)" onkeyup="theFocus(this);" onchange="theBlur()" title=""></textarea>
                                </td>
                                <td id='delete-td9'>
                                    <button id="remove9" class="btn" onclick="deleteRow(this,9)">delete</button>
                                </td>
                            </tr>

                            <tr id="field10">
                                <th scope="row" class="tableH factors"><textarea type="text" rows="4" cols="15" class="form-control market_textarea" name="factor10" readonly>
                                        (Trust/Credibility) Well-respected in the marketplace
                                </textarea>
                                </th>
                                <td><select name="x10" class="dataset" dataset="0">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                                <td><select name="y10" class="dataset" dataset="1">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                                <td><select name="z10" class="dataset" dataset="2">
    
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                </select></td>
                                <td><select name="k10" class="dataset" dataset="3">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
    
                                </select></td>
                                <td scope="row" class="tableH">
                                    <textarea type="text" rows="3" cols="20" class="form-control dynamicArea comments" name="comment10" onfocus="createTooltip(this)" onkeyup="theFocus(this);" onchange="theBlur()" title=""></textarea>
                                </td>
                                <td id='delete-td10'>
                                    <button id="remove10" class="btn" onclick="deleteRow(this,10)">delete</button>
                                </td>
                            </tr>

                            <tr id="field11">
                                <th scope="row" class="tableH factors"><textarea type="text" rows="4" cols="15" class="form-control market_textarea" name="factor11" readonly>
                                        (Sales) Not Market Share.                                  
                                    </textarea>
                                </th>

                                <td><select name="x11" class="dataset" dataset="0">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                                <td><select name="y11" class="dataset" dataset="1">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                                <td><select name="z11" class="dataset" dataset="2">
    
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                </select></td>
                                <td><select name="k11" class="dataset" dataset="3">
    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
    
                                </select></td>
                                <td scope="row" class="tableH">
                                    <textarea type="text" rows="3" cols="20" class="form-control dynamicArea comments" name="comment11" onfocus="createTooltip(this)" onkeyup="theFocus(this);" onchange="theBlur()" title=""></textarea>
                                </td>
                                <td id='delete-td11'>
                                    <button id="remove11" class="btn" onclick="deleteRow(this,11)">delete</button>
                                </td>
                            </tr>

                        </div>

                    </tbody>
                </table>

                <div class="col-md-5" style="margin-top: 9%;">
                    <div class="chart-container">
                        <canvas id="chart1"></canvas>
                    </div>
                </div>


                <!--row-->
            </div>
            <!--container-->
        </div>
        <button id="b1" class="btn add-more" type="button">add other factor</button>
        <button class="btn btn-primary mb-4 mt-3 ml-4" onclick="leadership()">Save</button>

         <!--Next and prev-->
         <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <button type="button" class="btn btn-lg
                    nextBtn" id="nextBtn1" onclick="nextPrev(1)" data-toggle="tooltip" data-placement="left" title="Next">Next</button>
                    <button type="button" class="btn btn-lg
                    prevBtn" id="prevBtn" onclick="nextPrev(-1)" data-toggle="tooltip" data-placement="top" title="Previous">Previous</button>
                </div>
            </div>
        </div>
       <!-- <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <button type="button" class="btn btn-primary btn-md" style="float:right !important;" onclick="leadership()">Save</button>
                    <button type="button" class="btn btn-lg prevBtn" id="prevBtn" onclick="nextPrev(-1)" data-toggle="tooltip" data-placement="top" title="Previous">&#8249;</button>
                </div>
            </div>
        </div>-->
        <!--productLines-->
    </div>
    <!--Third Tab-->
</div>
<!--container-->

<script>
  /* This is for add new row in step3*/
  $(".add-more").click(function(e) {
            e.preventDefault();
            var count = $("#count").val();
            count = parseInt(count) + 1;
            $("#count").val(count);
            var getLastChild = $("#example tr").last().attr('id');
            var splitLastChild = getLastChild.split("field");
            var myNext = splitLastChild[1];
            console.log("getLastChild", myNext);
            var next = Number(myNext);
            var addto = "#field" + next;
            next = next + 1;
            var addRemove = "#delete-td" + (next);
            var markup = `<tr id="field${next}">
                                            <th scope="row" class="tableH factors">
                                                <textarea type="text"  class="form-control dynamicArea" name="factor${next}" ></textarea>
                                            </th>
                                            <td><select name='x${next}' class="dataset" dataset="0">
                                                        
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="4">5</option>
                                                    </select></td>
                                            <td><select name='y${next}' class="dataset" dataset="1">
                                                        
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="4">5</option>
                                                    </select></td>
                                            <td><select name='z${next}' class="dataset" dataset="2">
                                                        <option value="5">5</option>
                                                        <option value="4">4</option>
                                                        <option value="3">3</option>
                                                        <option value="2">2</option>
                                                        <option value="1">1</option>
                                                    </select></td>
                                            <td><select name='k${next}' class="dataset" dataset="3">
                                                        
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                   
                                                    </select></td>
                                                    <td scope="row" class="tableH">
                                                        <textarea type="text" rows="3" cols="20" class="form-control dynamicArea comments" name="comment${next}" onfocus="createTooltip(this)" onkeyup="theFocus(this);" onchange="theBlur()" title=""></textarea>
                                                    </td>                                            
                                                    <td id='delete-td${next}'>
                                                    </td>
        
                                        </tr>`
            var newIn = markup;
            var newInput = $(newIn);
            var removeBtn = '<button id="remove' + next + '" class="btn remove-me" >delete</button></div><div id="delete-td">';
            var removeButton = $(removeBtn);
            $(addto).after(newInput);
            $(addRemove).append(removeButton);
            $('.remove-me').click(function(e, next) {
                var label = $(e).parent().parent().index();
                remove_label(label);
                e.preventDefault();
                var fieldNum = 0;
                if (myNext > 9) {
                    fieldNum = this.id.slice(-2);
                } else {
                    fieldNum = this.id.slice(-1);
                }

                console.log("fieldNum", fieldNum);
                var fieldID = "#field" + fieldNum;
                console.log("fieldIDfieldID", fieldID);
                $(this).remove();
                $(fieldID).remove();
            });
            add_label("New Label");
        });

</script>