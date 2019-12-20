<div class="container-fluid">
        <!--second tab-->
        <div class="tab animated">
            <p class="sectionTitle mt-4">SW</p>
            <hr>
            <input type="hidden" value="1" id="sw_input">
            <div class="mb-3 ml-2 mt-6 col-md-10">
                <table class="table table-striped col-md-7" id="sw_tabel">
                    <thead>
                        <tr>
                            <th scope="col">Factor</th>
                            <th scope="col" class="tableH supplyWidth">Strengths
                            </th>
                            <th scope="col" class="tableH supplyWidth">Weaknesses
                            </th>
                            <th scope="col" class="tableH supplyWidth">Comments RE. Competitors
                            </th>
                            <th scope="col" class="tableH supplyWidth">Priority (Low:1, High:5)</th>
                            <th></th>
                        </tr>
                    </thead>
    
                    <tbody>
                        <div id="sw_factors">
                            <!--Product-->
                            <tr class="disable" id="sw1_factors">
                                <th><b>Product</b></b>
                                </th>
    
                                <tr id="features_factor">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control fontSize
                                        bea_txtarea" name="sw_product_factor1" readonly>Features</textarea>
                                    </th>
                                    <td><textarea class="dynamicArea fontSize" name="sw_product_str1" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_product_weak1" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_product_comm1" cols="20" rows="10"></textarea></td>
                                    <td><select name='sw_product_pr1' class="sw_select">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                    <!--<td id='features_delete-td1'>
                                        <button id="features_remove1" class="btn customer_remove-me">delete</button>
                                    </td>-->
                                </tr>
    
                                <tr id="design_factor">
    
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control fontSize
                                        bea_txtarea" name="sw_product_factor2" readonly>Design</textarea>
                                    </th>
                                    <td><textarea class="dynamicArea fontSize" name="sw_product_str2" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_product_weak2" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_product_comm2" cols="20" rows="10"></textarea></td>
                                    <td><select name='sw_product_pr2' class="sw_select">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                   <!-- <td id='features_delete-td2'>
                                        <button id="features_remove2" class="btn customer_remove-me">delete</button>
                                    </td>-->
                                </tr>
    
                                <tr id="technology_factor">
    
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control fontSize
                                        bea_txtarea" name="sw_product_factor3" readonly>Technology</textarea>
                                    </th>
                                    <td><textarea class="dynamicArea fontSize" name="sw_product_str3" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_product_weak3" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_product_comm3" cols="20" rows="10"></textarea></td>
                                    <td><select name='sw_product_pr3' class="sw_select">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                    <!--<td id='features_delete-td13'>
                                        <button id="features_remove3" class="btn customer_remove-me">delete</button>
                                    </td>-->
                                </tr>
                            </tr>
    
                            <!--People-->
                            <tr class="disable" id="sw2_factors">
                                <th><b>People</b></b>
                                </th>
    
                                <tr id="skill_factor">
    
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control fontSize
                                        bea_txtarea" name="sw_people_factor1" readonly>Skill</textarea>
                                    </th>
                                    <td><textarea class="dynamicArea fontSize" name="sw_people_str1" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_people_weak1" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_people_comm1" cols="20" rows="10"></textarea></td>
                                    <td><select name='sw_people_pr1' class="sw_select">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                    <!--<td id='skill_delete-td1'>
                                        <button id="skill_remove1" class="btn customer_remove-me">delete</button>
                                    </td>-->
                                </tr>
    
                                <tr id="managed_factor">
    
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control fontSize
                                        bea_txtarea" name="sw_people_factor2" readonly>Managed</textarea>
                                    </th>
                                    <td><textarea class="dynamicArea fontSize" name="sw_people_str2" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_people_weak2" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_people_comm2" cols="20" rows="10"></textarea></td>
                                    <td><select name='sw_people_pr2' class="sw_select">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                    <!--<td id='skill_delete-td2'>
                                        <button id="skill_remove2" class="btn customer_remove-me">delete</button>
                                    </td>-->
                                </tr>
    
                                <tr id="culture_factor">
    
    
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control fontSize
                                        bea_txtarea" name="sw_people_factor3" readonly>Culture</textarea>
                                    </th>
                                    <td><textarea class="dynamicArea fontSize" name="sw_people_str3" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_people_weak3" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_people_comm3" cols="20" rows="10"></textarea></td>
                                    <td><select name='sw_people_pr3' class="sw_select">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                    <!--<td id='skill_delete-td2'>
                                        <button id="skill_remove3" class="btn customer_remove-me">delete</button>
                                    </td>-->
                                </tr>
                            </tr>
    
                            <!--Process-->
                            <tr class="disable" id="sw3_factors">
                                <th><b>Process</b></b>
                                </th>
    
                                <tr id="design_factor">
    
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control fontSize
                                        bea_txtarea" name="sw_process_factor1" readonly>Design</textarea>
                                    </th>
                                    <td><textarea class="dynamicArea fontSize" name="sw_process_str1" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_process_weak1" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_process_comm1" cols="20" rows="10"></textarea></td>
                                    <td><select name='sw_process_pr1' class="sw_select">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                    <!--<td id='design_delete-td1'>
                                        <button id="design_remove1" class="btn customer_remove-me">delete</button>
                                    </td>-->
                                </tr>
    
                                <tr id="technology2_factor">
    
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control fontSize
                                        bea_txtarea" name="sw_process_factor2" readonly>Technology</textarea>
                                    </th>
                                    <td><textarea class="dynamicArea fontSize" name="sw_process_str2" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_process_weak2" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_process_comm2" cols="20" rows="10"></textarea></td>
                                    <td><select name='sw_process_pr2' class="sw_select">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                    <!--<td id='technology2_delete-td2'>
                                        <button id="technology2_remove2" class="btn customer_remove-me">delete</button>
                                    </td>-->
                                </tr>
                            </tr>
    
    
                            <!--Operation-->
                            <tr class="disable" id="sw4_factors">
                                <th><b>Operation</b></b>
                                </th>
    
                                <tr id="supplier_factor">
    
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control fontSize
                                        bea_txtarea" name="sw_oper_factor1" readonly>Supplier Management</textarea>
                                    </th>
                                    <td><textarea class="dynamicArea fontSize" name="sw_oper_str1" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_oper_weak1" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_oper_comm1" cols="20" rows="10"></textarea></td>
                                    <td><select name='sw_oper_pr1' class="sw_select">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                    <!--<td id='supplier_delete-td1'>
                                        <button id="supplier_remove1" class="btn customer_remove-me">delete</button>
                                    </td>-->
                                </tr>
    
                                <tr id="planning_factor">
    
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control fontSize
                                        bea_txtarea" name="sw_oper_factor2" readonly>Planning & Control</textarea>
                                    </th>
                                    <td><textarea class="dynamicArea fontSize" name="sw_oper_str2" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_oper_weak2" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_oper_comm2" cols="20" rows="10"></textarea></td>
                                    <td><select name='sw_oper_pr2' class="sw_select">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                   <!-- <td id='planning_delete-td1'>
                                        <button id="planning_remove1" class="btn customer_remove-me">delete</button>
                                    </td>-->
                                </tr>
    
                                <tr id="newProduct_factor">
    
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control fontSize
                                        bea_txtarea" name="sw_oper_factor3" readonly>New Product Dev.</textarea>
                                    </th>
                                    <td><textarea class="dynamicArea fontSize" name="sw_oper_str3" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_oper_weak3" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_oper_comm3" cols="20" rows="10"></textarea></td>
                                    <td><select name='sw_oper_pr3' class="sw_select">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                    <!--<td id='newProduct_delete-td1'>
                                        <button id="newProduct_remove1" class="btn customer_remove-me">delete</button>
                                    </td>-->
                                </tr>
    
                                <tr id="costing _factor">
    
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control fontSize
                                        bea_txtarea" name="sw_oper_factor4" readonly>Costing</textarea>
                                    </th>
                                    <td><textarea class="dynamicArea fontSize" name="sw_oper_str4" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_oper_weak4" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_oper_comm4" cols="20" rows="10"></textarea></td>
                                    <td><select name='sw_oper_pr4' class="sw_select">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                    <!--<td id='costing_delete-td1'>
                                        <button id="costing_remove1" class="btn customer_remove-me">delete</button>
                                    </td>-->
                                </tr>
    
                                <tr id="sales_factor">
       
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control fontSize
                                        bea_txtarea" name="sw_oper_factor5" readonly>Marketing & Sales</textarea>
                                    </th>
                                    <td><textarea class="dynamicArea fontSize" name="sw_oper_str5" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_oper_weak5" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_oper_comm5" cols="20" rows="10"></textarea></td>
                                    <td><select name='sw_oper_pr5' class="sw_select">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                    <!--<td id='sales_delete-td1'>
                                        <button id="sales_remove1" class="btn customer_remove-me">delete</button>
                                    </td>-->
                                </tr>
                            </tr>
    
                            <!--Organisation-->
                            <tr class="disable" id="sw5_factors">
                                <th><b>Organisation</b></b>
                                </th>
    
                                <tr id="structure_factor">
     
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control fontSize
                                        bea_txtarea" name="sw_organ_factor1" readonly>Structure</textarea>
                                    </th>
                                    <td><textarea class="dynamicArea fontSize" name="sw_organ_str1" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_organ_weak1" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_organ_comm1" cols="20" rows="10"></textarea></td>
                                    <td><select name='sw_organ_pr1' class="sw_select">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                    <!--<td id='structure_delete-td1'>
                                        <button id="structure_remove1" class="btn customer_remove-me">delete</button>
                                    </td>-->
                                </tr>
    
                                <tr id="management_factor">
    
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control fontSize
                                        bea_txtarea" name="sw_organ_factor2" readonly>Management</textarea>
                                    </th>
                                    <td><textarea class="dynamicArea fontSize" name="sw_organ_str2" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_organ_weak2" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_organ_comm2" cols="20" rows="10"></textarea></td>
                                    <td><select name='sw_organ_pr2' class="sw_select">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                    <!--<td id='management_delete-td1'>
                                        <button id="management_remove1" class="btn customer_remove-me">delete</button>
                                    </td>-->
                                </tr>
    
                                <tr id="partnerships_factor">
    
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control fontSize
                                        bea_txtarea" name="sw_organ_factor3" readonly>Partnerships</textarea>
                                    </th>
                                    <td><textarea class="dynamicArea fontSize" name="sw_organ_str3" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_organ_weak3" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_organ_comm3" cols="20" rows="10"></textarea></td>
                                    <td><select name='sw_organ_pr3' class="sw_select">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                    <!--<td id='partnerships_delete-td1'>
                                        <button id="partnerships_remove1" class="btn customer_remove-me">delete</button>
                                    </td>-->
                                </tr>
    
                                <tr id="Location_factor">
      
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control fontSize
                                        bea_txtarea" name="sw_organ_factor4" readonly>Location</textarea>
                                    </th>
                                    <td><textarea class="dynamicArea fontSize" name="sw_organ_str4" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_organ_weak4" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="sw_organ_comm4" cols="20" rows="10"></textarea></td>
                                    <td><select name='sw_organ_pr4' class="sw_select">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                    <!--<td id='Location_delete-td1'>
                                        <button id="Location_remove1" class="btn customer_remove-me">delete</button>
                                    </td>-->
                                </tr>
    
                            </tr>
                        </div>
                    </tbody>
                </table>
            </div>
            <!--Save Data Section-->
            <div>
               <!-- <button id="b3" class="btn  add-moreSW" type="button">add
                            other
                            factor</button>-->
                <button type="button" class="btn btn-primary btn-md ml-4" onclick="sw()">Save</button>
            </div>
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
        </div>
    </div>
    </div>
    
    <script>
        $(".add-moreSW").click(function(e) {
            e.preventDefault();
            var count = $("#sw_input").val();
            count = parseInt(count) + 1;
            $("#sw_input").val(count);
            var getLastChild = $("#sw_tabel tr").last().attr('id');
            var splitLastChild = getLastChild.split("sw_factors");
            var myNext = splitLastChild[1];
            console.log("getLastChild", myNext);
            var next = Number(myNext);
            var addto = "#sw_factors" + next;
            next = next + 1;
            var addRemove = "#sw_factors_delete-td" + (next);
            var markup = ` <tr class="disable" id="sw${next}_factors">
                                <th><b>Product</b></b>
                                </th>
    
                                <tr id="newRow${next}_factor">
                                    <th scope="row" class="tableH tru_factors">
                                        <textarea type="text" class="form-control fontSize
                                        bea_txtarea" name="features_factor_txtarea"></textarea>
                                    </th>
                                    <td><textarea class="dynamicArea fontSize" name="newRow${next}_factor1" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="newRow${next}_factor2" cols="20" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="newRow${next}_factor3" cols="20" rows="10"></textarea></td>
                                    <td><select name='newRow${next}_factor${next}_Control' class="datasetTrend" datasetTrend="2">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                    <td id='newRow${next}_delete-td${next}'>
                                            <button id="customerField_remove13" class="btn customer_remove-me">delete</button>
                                        </td>
                                </tr>
                            </tr>`
            var newIn = markup;
            var newInput = $(newIn);
            $(addto).after(newInput);
    
        });
    </script>