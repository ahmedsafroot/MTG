<div class="container-fluid">
        <!--second tab-->
        <div class="tab animated">
            <h2 class="step_title">An Analysis of the company’s Strengths and Weaknesses in KEY areas(Step 3)
            </h2>
            <hr>
            <p class="descParagrah">Identify your strengths and weaknesses in terms of: Products; People; Processes; Operations; Organisation
            </p>

            <p class="sectionTitle mt-4">Instructions</p>
            <hr>
            <ol class="descParagrah enlarge">
                <li>In each section, choose the important factors and DELETE the rest (or ADD other factors you think are important to you)
                    </li>
                <li>EXPLAIN your strength AND/OR weakness for each factor, and how you assess yourself Vs your closest competitor
                    </li>
                <li>Priority: What is the priority of this factor for you to focus on?
                    </li>
                </ol>
            <p class="sectionTitle mt-4">OUTCOME</p>
            <hr>
            <p class="descParagrah">
                    The factors from this section will be used to IDENTIFY actions for improvement
            </p>
            <!--First Table-->
            <!--Factor One: SUPPLY CHAIN-->
            <div id="sw_factor1" class="accordion mb-3 ml-2 mt-6 col-md-10">
                <div class="card mb-0">
                    <div class="card-header collapsed" data-toggle="collapse" href="#sw_SUPPLY1">
                        <a class="card-title">
                            Product
                        </a>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div id="sw_SUPPLY1" class="card-body collapse" data-parent="#sw_factor1">
                        <input type="hidden" value="3" id="sw_count_product">
                        <table class="table table-striped col-md-7" id="sw_products">
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
                                </tr>
                            </thead>
    
                            <tbody>
                                <div id="sw_supply">
                                    <tr id="sw_products1">
                                        <th scope="row" class="tableH tru_factors">
                                            <textarea type="text" name='sw_factor_prod1' class="dynamicArea fontSize" cols="20" rows="10" >Features</textarea>
                                        </th>
                                        <td><textarea class="dynamicArea fontSize" name='sw_str_prod1' cols="20" rows="10"   cols="20" rows="10"></textarea></td>
                                        <td><textarea class="dynamicArea fontSize" name='sw_weak_prod1' cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                        <td><textarea class="dynamicArea fontSize" name='sw_comm_prod1' cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                        <td><select name='sw_pro_prod1' class="sw_select">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></td>
    
                                        <td>
                                            <button  class="btn removeRow" >delete</button>
                                        </td>
                                    </tr>
                                    <tr id="sw_products2">
                                            <th scope="row" class="tableH tru_factors">
                                                <textarea type="text" name='sw_factor_prod2' class="dynamicArea fontSize" cols="20" rows="10">Design</textarea>
                                            </th>
                                            <td><textarea name='sw_str_prod2' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                            <td><textarea name='sw_weak_prod2' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                            <td><textarea name='sw_comm_prod2' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                            <td><select name='sw_pro_prod2' class="sw_select">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select></td>
        
                                            <td>
                                                <button  class="btn removeRow" >delete</button>
                                            </td>
                                        </tr>

                                        <tr id="sw_products3">
                                                <th scope="row" class="tableH tru_factors">
                                                    <textarea name='sw_factor_prod3' type="text" class="dynamicArea fontSize" cols="20" rows="10" >Technology</textarea>
                                                </th>
                                                <td><textarea name='sw_str_prod3' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                <td><textarea name='sw_weak_prod3' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                <td><textarea name='sw_comm_prod3' class="dynamicArea fontSize" cols="20" rows="10" cols="20" rows="10"></textarea></td>
                                                <td><select name='sw_pro_prod3' class="sw_select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select></td>
            
                                                <td>
                                                    <button  class="btn removeRow" >delete</button>
                                                </td>
                                            </tr>

    
                                </div>
    
                            </tbody>
                        </table>
                        <div>
                            <button id="add_moreProduct" class="btn add-moreProduct" type="button">add other
                                factor</button>
                        </div>
                        <!--collapse#-->
                    </div>
                    <!--card-->
                </div>
                <!--accordion-->
            </div>
    
    
    
            <!--Second Table-->
            <!--DYNAMIC CUSTOMER REQUIREMENTS-->
            <div id="sw_factor2" class="accordion mb-3 ml-2 mt-6 col-md-10">
                <div class="card mb-0">
                    <div class="card-header collapsed" data-toggle="collapse" href="#sw_CUST_REQ">
                        <a class="card-title">
                                People
                        </a>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div id="sw_CUST_REQ" class="card-body collapse" data-parent="#sw_factor2">
                        <input type="hidden" value="3" id="sw_count_people">
                        <table class="table table-striped col-md-7" id="sw_peoples">
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
                                    </tr>
                            </thead>
    
                            <tbody>
                                <div id="sw_cust_req">
                                    <tr id="sw_peoples1">
                                            <th scope="row" class="tableH tru_factors">
                                                    <textarea type="text" name='sw_factor_people1' class="dynamicArea fontSize" cols="20" rows="10" >Skill</textarea>
                                                </th>
                                                <td><textarea name='sw_str_people1' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                <td><textarea name='sw_weak_people1' class="dynamicArea fontSize" cols="20" rows="10" cols="20" rows="10"></textarea></td>
                                                <td><textarea name='sw_comm_people1' class="dynamicArea fontSize" cols="20" rows="10"cols="20" rows="10"></textarea></td>
                                                <td><select name='sw_pro_people1' class="sw_select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select></td>
            
                                                <td>
                                                    <button  class="btn removeRow" >delete</button>
                                                </td>  
                                   
                                      
                                    </tr>

                                    <tr id="sw_peoples2">
                                            <th scope="row" class="tableH tru_factors">
                                                    <textarea type="text" name='sw_factor_people2' class="dynamicArea fontSize" cols="20" rows="10" >Managed</textarea>
                                                </th>
                                                <td><textarea name='sw_str_people2' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                <td><textarea name='sw_weak_people2' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                <td><textarea name='sw_comm_people2' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                <td><select name='sw_pro_people2' class="sw_select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select></td>
            
                                                <td>
                                                    <button  class="btn removeRow" >delete</button>
                                                </td>  
                                   
                                      
                                    </tr>
                                    <tr id="sw_peoples3">
                                            <th scope="row" class="tableH tru_factors">
                                                    <textarea type="text" name='sw_factor_people3' class="dynamicArea fontSize" cols="20" rows="10" >Culture</textarea>
                                                </th>
                                                <td><textarea name='sw_str_people3' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                <td><textarea name='sw_weak_people3' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                <td><textarea name='sw_comm_people3' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                <td><select name='sw_pro_people3' class="sw_select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select></td>
            
                                                <td>
                                                    <button  class="btn removeRow" >delete</button>
                                                </td>  
                                   
                                      
                                    </tr>
    
                                </div>
    
                            </tbody>
                        </table>
                        <div>
                            <button  class="btn add-morePeople" type="button">add other factor</button>
                        </div>
                        <!--collapse#-->
                    </div>
                    <!--card-->
                </div>
                <!--accordion-->
            </div>
    
    
    
            <!--Third Table-->
            <!--RIVALRY/COMPTETION-->
            <div id="sw_factor3" class="accordion mb-3 ml-2 mt-6 col-md-10">
                <div class="card mb-0">
                    <div class="card-header collapsed" data-toggle="collapse" href="#sw_RIVALRY">
                        <a class="card-title">
                            Process
                        </a>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div id="sw_RIVALRY" class="card-body collapse" data-parent="#sw_factor3">
                        <input type="hidden" value="2" id="sw_count_process">
                        <table class="table table-striped col-md-7" id="sw_process">
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
                                    </tr>
                            </thead>
    
                            <tbody>
                                <div id="sw_rivalry">
                                        <tr id="sw_process1">
                                                <th scope="row" class="tableH tru_factors">
                                                        <textarea type="text" name='sw_factor_process1' class="dynamicArea fontSize" cols="20" rows="10" >Design</textarea>
                                                    </th>
                                                    <td><textarea name='sw_str_process1' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><textarea name='sw_weak_process1' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><textarea name='sw_comm_process1' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><select name='sw_pro_process1' class="sw_select">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select></td>
                
                                                    <td>
                                                        <button  class="btn removeRow" >delete</button>
                                                    </td>  
                                       
                                          
                                        </tr>

                                        <tr id="sw_process2">
                                                <th scope="row" class="tableH tru_factors">
                                                        <textarea type="text" name='sw_factor_process2' class="dynamicArea fontSize" cols="20" rows="10" >Technology</textarea>
                                                    </th>
                                                    <td><textarea name='sw_str_process2' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><textarea name='sw_weak_process2' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><textarea name='sw_comm_process2' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><select name='sw_pro_process2' class="sw_select">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select></td>
                
                                                    <td>
                                                        <button  class="btn removeRow" >delete</button>
                                                    </td>  
                                       
                                          
                                        </tr>
    
                                </div>
    
                            </tbody>
                        </table>
                        <div>
                            <button  class="btn add-moreProcess" type="button">add
                                other
                                factor</button>
                        </div>
                        <!--collapse#-->
                    </div>
                    <!--card-->
                </div>
                <!--accordion-->
            </div>
    
    
    
            <!--Forth Table-->
            <!--PURCHASING-->
            <div id="sw_factor4" class="accordion mb-3 ml-2 mt-6 col-md-10">
                <div class="card mb-0">
                    <div class="card-header collapsed" data-toggle="collapse" href="#sw_PURCHASING">
                        <a class="card-title">
                                Operation
                        </a>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div id="sw_PURCHASING" class="card-body collapse" data-parent="#sw_factor4">
                        <input type="hidden" value="5" id="sw_count_operation">
                        <table class="table table-striped col-md-7" id="sw_operations">
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
                                    </tr>
                            </thead>
    
                            <tbody>
                                <div id="sw_purchasing">
                                    
                                        <tr id="sw_operations1">
                                                <th scope="row" class="tableH tru_factors">
                                                        <textarea name='sw_factor_operation1' type="text" class="dynamicArea fontSize" cols="20" rows="10" >Supplier Management</textarea>
                                                    </th>
                                                    <td><textarea name='sw_str_operation1' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><textarea name='sw_weak_operation1' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><textarea name='sw_comm_operation1' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><select name='sw_pro_operation1' class="sw_select">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select></td>
                
                                                    <td>
                                                        <button  class="btn removeRow" >delete</button>
                                                    </td>  
                                       
                                          
                                        </tr>
                                        <tr id="sw_operations2">
                                                <th scope="row" class="tableH tru_factors">
                                                        <textarea name='sw_factor_operation2' type="text" class="dynamicArea fontSize" cols="20" rows="10" >Planning & Control</textarea>
                                                    </th>
                                                    <td><textarea name='sw_str_operation2' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><textarea name='sw_weak_operation2' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><textarea name='sw_comm_operation2' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><select name='sw_pro_operation2' class="sw_select">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select></td>
                
                                                    <td>
                                                        <button  class="btn removeRow" >delete</button>
                                                    </td>  
                                       
                                          
                                        </tr>
                                        <tr id="sw_operations3">
                                                <th scope="row" class="tableH tru_factors">
                                                        <textarea name='sw_factor_operation3' type="text" class="dynamicArea fontSize" cols="20" rows="10" >New Product Dev.</textarea>
                                                    </th>
                                                    <td><textarea  name='sw_str_operation3' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><textarea name='sw_weak_operation3' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><textarea name='sw_comm_operation3' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><select name='sw_pro_operation3' class="sw_select">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select></td>
                
                                                    <td>
                                                        <button  class="btn removeRow" >delete</button>
                                                    </td>  
                                       
                                          
                                        </tr>
                                        <tr id="sw_operations4">
                                                <th scope="row" class="tableH tru_factors">
                                                        <textarea name='sw_factor_operation4' type="text" class="dynamicArea fontSize" cols="20" rows="10" >Costing </textarea>
                                                    </th>
                                                    <td><textarea name='sw_str_operation4' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><textarea name='sw_weak_operation4' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><textarea name='sw_comm_operation4' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><select name='sw_pro_operation4' class="sw_select">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select></td>
                
                                                    <td>
                                                        <button  class="btn removeRow" >delete</button>
                                                    </td>  
                                       
                                          
                                        </tr>
                                        <tr id="sw_operations5">
                                                <th scope="row" class="tableH tru_factors">
                                                        <textarea name='sw_factor_operation5' type="text" class="dynamicArea fontSize" cols="20" rows="10" >Marketing & Sales</textarea>
                                                    </th>
                                                    <td><textarea name='sw_str_operation5' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><textarea name='sw_weak_operation5' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><textarea name='sw_comm_operation5' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><select name='sw_pro_operation5' class="sw_select">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select></td>
                
                                                    <td>
                                                        <button  class="btn removeRow" >delete</button>
                                                    </td>  
                                       
                                          
                                        </tr>
    
                                </div>
    
                            </tbody>
                        </table>
                        <div>
                            <button  class="btn add-moreOperation" type="button">add
                                other
                                factor</button>
                        </div>
                        <!--collapse#-->
                    </div>
                    <!--card-->
                </div>
                <!--accordion-->
            </div>
    
    
    
            <!--Fifth Table-->
            <!--TECHNOLOGICAL CHANGES-->
            <div id="sw_factor5" class="accordion mb-3 ml-2 mt-6 col-md-10">
                <div class="card mb-0">
                    <div class="card-header collapsed" data-toggle="collapse" href="#sw_TechChanges">
                        <a class="card-title">
                                Organisation
                        </a>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <div id="sw_TechChanges" class="card-body collapse" data-parent="#sw_factor5">
                        <input type="hidden" value="4" id="sw_count_organ">
                        <table class="table table-striped col-md-7" id="sw_organs">
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
                                    </tr>
                            </thead>
    
                            <tbody>
                                <div id="sw_TechChanges">
                                        <tr id="sw_organs1">
                                                <th scope="row" class="tableH tru_factors">
                                                        <textarea name='sw_factor_organ1' type="text" class="dynamicArea fontSize" cols="20" rows="10" >Structure</textarea>
                                                    </th>
                                                    <td><textarea name='sw_str_organ1' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><textarea name='sw_weak_organ1' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><textarea name='sw_comm_organ1' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><select name='sw_pro_organ1' class="sw_select">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select></td>
                
                                                    <td>
                                                        <button  class="btn removeRow" >delete</button>
                                                    </td>  
                                       
                                          
                                        </tr>

                                        <tr id="sw_organs2">
                                                <th scope="row" class="tableH tru_factors">
                                                        <textarea name='sw_factor_organ2' type="text" class="dynamicArea fontSize" cols="20" rows="10" >Management</textarea>
                                                    </th>
                                                    <td><textarea name='sw_str_organ2' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><textarea name='sw_weak_organ2' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><textarea name='sw_comm_organ2' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><select name='sw_pro_organ2' class="sw_select">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select></td>
                
                                                    <td>
                                                        <button  class="btn removeRow" >delete</button>
                                                    </td>  
                                       
                                          
                                        </tr>
                                        <tr id="sw_organs3">
                                                <th scope="row" class="tableH tru_factors">
                                                        <textarea name='sw_factor_organ3' type="text" class="dynamicArea fontSize" cols="20" rows="10" >Partnerships</textarea>
                                                    </th>
                                                    <td><textarea name='sw_str_organ3' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><textarea name='sw_weak_organ3' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><textarea name='sw_comm_organ3' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><select name='sw_pro_organ3' class="sw_select">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select></td>
                
                                                    <td>
                                                        <button  class="btn removeRow" >delete</button>
                                                    </td>  
                                       
                                          
                                        </tr>
                                        <tr id="sw_organs4">
                                                <th scope="row" class="tableH tru_factors">
                                                        <textarea name='sw_factor_organ4' type="text" class="dynamicArea fontSize" cols="20" rows="10" >Location</textarea>
                                                    </th>
                                                    <td><textarea name='sw_str_organ4' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><textarea name='sw_weak_organ4' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><textarea name='sw_comm_organ4' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                    <td><select name='sw_pro_organ4' class="sw_select">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select></td>
                
                                                    <td>
                                                        <button  class="btn removeRow" >delete</button>
                                                    </td>  
                                       
                                          
                                        </tr>
                                </div>
    
                            </tbody>
                        </table>
                        <div>
                            <button  class="btn add-moreOrgan" type="button">add
                                other
                                factor</button>
                        </div>
                        <!--collapse#-->
                    </div>
                    <!--card-->
                </div>
                <!--accordion-->
            </div>
    
    
            <!--Save Data Section-->
            <div>
                <button type="button" class="btn btn-primary btn-md ml-4" onclick="sw()">Save</button>
            </div>
    
    
            <!--Next and prev-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <button type="button" class="btn btn-lg
                            nextBtn" id="sw_nextBtn1" onclick="nextPrev(1)" data-toggle="tooltip" data-placement="left" title="Next">Next</button>
                        <button type="button" class="btn btn-lg
                            prevBtn" id="sw_prevBtn" onclick="nextPrev(-1)" data-toggle="tooltip" data-placement="top" title="Previous">Previous</button>
                    </div>
                </div>
            </div>
        </div>
        <!--second tab-->
    
        <!--container-->
    </div>
    
    
    <script>
        //add more 
        $(".add-moreProduct").click(function(e) {
            e.preventDefault();
            var count = $("#sw_count_product").val();
            count = parseInt(count) + 1;
            $("#sw_count_product").val(count);
            var getLastChild = $("#sw_products tr").last().attr('id');
            var splitLastChild = getLastChild.split("sw_products");
            var myNext = splitLastChild[1];
            console.log("getLastChild", myNext);
            var next = Number(myNext);
            var addto = "#sw_products" + next;
            next = next + 1;
            var addRemove = "#supply_delete-td" + (next);
            var markup = `<tr id="sw_products${next}">
                                                <th scope="row" class="tableH tru_factors">
                                                    <textarea name='sw_factor_prod${next}' type="text" class="dynamicArea fontSize" cols="20" rows="10" ></textarea>
                                                </th>
                                                <td><textarea name='sw_str_prod${next}' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                <td><textarea name='sw_weak_prod${next}' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                <td><textarea name='sw_comm_prod${next}' class="dynamicArea fontSize" cols="20" rows="10" cols="20" rows="10"></textarea></td>
                                                <td><select name='sw_pro_prod${next}' class="sw_select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select></td>
            
                                                <td>
                                                    <button  class="btn removeRow" >delete</button>
                                                </td>
                                            </tr>`
            var newIn = markup;
            var newInput = $(newIn);
            $(addto).after(newInput);
    
        });

        $(".add-morePeople").click(function(e) {
            e.preventDefault();
            var count = $("#sw_count_people").val();
            count = parseInt(count) + 1;
            $("#sw_count_people").val(count);
            var getLastChild = $("#sw_peoples tr").last().attr('id');
            var splitLastChild = getLastChild.split("sw_peoples");
            var myNext = splitLastChild[1];
            console.log("getLastChild", myNext);
            var next = Number(myNext);
            var addto = "#sw_peoples" + next;
            next = next + 1;
            var addRemove = "#supply_delete-td" + (next);
            var markup = `<tr id="sw_peoples${next}">
                                                <th scope="row" class="tableH tru_factors">
                                                    <textarea name='sw_factor_people${next}' type="text" class="dynamicArea fontSize" cols="20" rows="10" ></textarea>
                                                </th>
                                                <td><textarea name='sw_str_people${next}' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                <td><textarea name='sw_weak_people${next}' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                <td><textarea name='sw_comm_people${next}' class="dynamicArea fontSize" cols="20" rows="10" cols="20" rows="10"></textarea></td>
                                                <td><select name='sw_pro_people${next}' class="sw_select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select></td>
            
                                                <td>
                                                    <button  class="btn removeRow" >delete</button>
                                                </td>
                                            </tr>`
            var newIn = markup;
            var newInput = $(newIn);
            $(addto).after(newInput);
    
        });

        $(".add-moreProcess").click(function(e) {
            e.preventDefault();
            var count = $("#sw_count_process").val();
            count = parseInt(count) + 1;
            $("#sw_count_process").val(count);
            var getLastChild = $("#sw_process tr").last().attr('id');
            var splitLastChild = getLastChild.split("sw_process");
            var myNext = splitLastChild[1];
            console.log("getLastChild", myNext);
            var next = Number(myNext);
            var addto = "#sw_process" + next;
            next = next + 1;
            var addRemove = "#supply_delete-td" + (next);
            var markup = `<tr id="sw_process${next}">
                                                <th scope="row" class="tableH tru_factors">
                                                    <textarea name='sw_factor_process${next}' type="text" class="dynamicArea fontSize" cols="20" rows="10" ></textarea>
                                                </th>
                                                <td><textarea name='sw_str_process${next}' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                <td><textarea name='sw_weak_process${next}' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                <td><textarea name='sw_comm_process${next}' class="dynamicArea fontSize" cols="20" rows="10" cols="20" rows="10"></textarea></td>
                                                <td><select name='sw_pro_process${next}' class="sw_select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select></td>
            
                                                <td>
                                                    <button  class="btn removeRow" >delete</button>
                                                </td>
                                            </tr>`
            var newIn = markup;
            var newInput = $(newIn);
            $(addto).after(newInput);
    
        });

        $(".add-moreOperation").click(function(e) {
            e.preventDefault();
            var count = $("#sw_count_operation").val();
            count = parseInt(count) + 1;
            $("#sw_count_operation").val(count);
            var getLastChild = $("#sw_operations tr").last().attr('id');
            var splitLastChild = getLastChild.split("sw_operations");
            var myNext = splitLastChild[1];
            console.log("getLastChild", myNext);
            var next = Number(myNext);
            var addto = "#sw_operations" + next;
            next = next + 1;
            var addRemove = "#supply_delete-td" + (next);
            var markup = `<tr id="sw_operations${next}">
                                                <th scope="row" class="tableH tru_factors">
                                                    <textarea name='sw_factor_operation${next}' type="text" class="dynamicArea fontSize" cols="20" rows="10" ></textarea>
                                                </th>
                                                <td><textarea name='sw_str_operation${next}' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                <td><textarea name='sw_weak_operation${next}' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                <td><textarea name='sw_comm_operation${next}' class="dynamicArea fontSize" cols="20" rows="10" cols="20" rows="10"></textarea></td>
                                                <td><select name='sw_pro_operation${next}' class="sw_select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select></td>
            
                                                <td>
                                                    <button  class="btn removeRow" >delete</button>
                                                </td>
                                            </tr>`
            var newIn = markup;
            var newInput = $(newIn);
            $(addto).after(newInput);
    
        });

        $(".add-moreOrgan").click(function(e) {
            e.preventDefault();
            var count = $("#sw_count_organ").val();
            count = parseInt(count) + 1;
            $("#sw_count_organ").val(count);
            var getLastChild = $("#sw_organs tr").last().attr('id');
            var splitLastChild = getLastChild.split("sw_organs");
            var myNext = splitLastChild[1];
            console.log("getLastChild", myNext);
            var next = Number(myNext);
            var addto = "#sw_organs" + next;
            next = next + 1;
            var addRemove = "#supply_delete-td" + (next);
            var markup = `<tr id="sw_organs${next}">
                                                <th scope="row" class="tableH tru_factors">
                                                    <textarea name='sw_factor_organ${next}' type="text" class="dynamicArea fontSize" cols="20" rows="10" ></textarea>
                                                </th>
                                                <td><textarea name='sw_str_organ${next}' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                <td><textarea name='sw_weak_organ${next}' class="dynamicArea fontSize" cols="20" rows="10"  cols="20" rows="10"></textarea></td>
                                                <td><textarea name='sw_comm_organ${next}' class="dynamicArea fontSize" cols="20" rows="10" cols="20" rows="10"></textarea></td>
                                                <td><select name='sw_pro_organ${next}' class="sw_select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select></td>
            
                                                <td>
                                                    <button  class="btn removeRow" >delete</button>
                                                </td>
                                            </tr>`
            var newIn = markup;
            var newInput = $(newIn);
            $(addto).after(newInput);
    
        });
    
       
    </script>