<!--Third Tab-->
<div class="tab animated">
    <div class="ProductLines">
        <h2 class="step_title">IDENTIFIED areas for ACTION</h2>
        <div style="margin-left:5px">
                <p class="descParagrah">A LIST OF POTENTIAL ACTIONS FOR IMPROVEMENT IS PROVIDED FOR YOU TO CONSIDER
                </p>
                <hr><hr>
                <p class="sectionTitle mt-4">Instructions</p>
                <hr>
                <p class="descParagrah">
                    <ol class="descParagrah">
                        <li>
                            PROVIDE A SCORE FOR EACH OF THE PROPOSED AREAS AGAINST THE GIVEN MEASURES [HOW CRITICAL IT IS; CAN YOU CONTROL IT; RISKS IN DOING SO; DIFFICULTY/COMPLEXITY; RESOURCES NEEDED; HOW LONG DOES IT TAKE; EXPECTED ROI]
                        </li>
                        <li>
                            DISCUSS THE PRIORITY FACTORS IDENTIFIED IN YOUR TEAM. SELECT THE TOP ACTIONS YOU FIND VIABLE FOR YOUR COMPANY
                        </li>
                        <li>
                            DECIDE ON WHO SHOULD LEAD ON THE PROJECT, BEGIN PLANNING FOR IMPLEMENTATION
                        </li>
                    </ol>
                        
                </p>
                <hr><hr>
                <div>
                <img src="{{ asset('public/images/action.png')}}" width="100%">
                </div>
                <p class="sectionTitle mt-4">OUTCOME</p>
                <hr>
                <h3>PRIORITY ACTIONS/TASKS TO BE UNDERTAKEN</h3>
                <p class="descParagrah">
                        YOU WILL HAVE THE OPTION TO DECIDE ON CONSULTING FURTHER WITH THE AGILITY CENTRE WHICH MAY BE ARRANGED VIA APPROPRIATE MECHANISMS OF SUPPORT
                </p>
        </div>
        <div class="container-fluid">
            <div class="row">
                <input type="hidden" value="1" id="decisions-input">
                <!--company's main product lines table of radio buttons-->
                <div class="ProductLines col-md-8">
                    <table class="table table-striped" id="decisions_tabel">
                        <thead>
                            <tr>
                                <th scope="col">Tasks to be accomplished:</th>
                                <th scope="col">Owner</th>
                                <th scope="col">Due date</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <div id="decisions">
                                <tr id="decisions1">
                                    <td><textarea class="dynamicArea fontSize" name="task1" cols="30" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="owner1" cols="30" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="date1" cols="30" rows="10"></textarea></td>                                   
                                    <td id='decisions_delete-td1'>
                                        <button id="decisions1_remove1" class="btn removeRow">delete</button>
                                    </td>
                                </tr>

                            </div>
                        </tbody>
                    </table>
                </div>
                <!--row-->

            </div>
            <!--container-->
        </div>
        <div>
            <button id="b2" class="btn  add-decisions" type="button">add
                other
                factor</button>
                <button class="btn btn-primary mb-4 mt-3 ml-4" onclick="actions()">Save</button>
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
        <!--productLines-->
    </div>
    <!--Third Tab-->
</div>
<!--container-->
<script>
    $(".add-decisions").click(function(e) {
        e.preventDefault();
        var count = $("#decisions-input").val();
        count = parseInt(count) + 1;
        $("#decisions-input").val(count);
        var getLastChild = $("#decisions_tabel tr").last().attr('id');
        var splitLastChild = getLastChild.split("decisions");
        var myNext = splitLastChild[1];
        console.log("getLastChild", myNext);
        var next = Number(myNext);
        var addto = "#decisions" + next;
        next = next + 1;
        var addRemove = "#decisions_delete-td" + (next);
        var markup = `<tr id="decisions${next}">
                                    <td><textarea class="dynamicArea fontSize" name="task${next}" cols="30" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="owner${next}" cols="30" rows="10"></textarea></td>
                                    <td><textarea class="dynamicArea fontSize" name="date${next}" cols="30" rows="10"></textarea></td>                                   
                                    <td id='decisions_delete-td${next}'>
                                        <button id="decisions${next}_remove${next}" class="btn removeRow">delete</button>
                                    </td>
                                </tr>
`
                                var newIn = markup;
        var newInput = $(newIn);
        $(addto).after(newInput);

    });
</script>