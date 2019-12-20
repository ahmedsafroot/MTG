<div class="container-fluid">
    <!--second tab-->
    <div class="tab animated">
        <p class="sectionTitle mt-4">Turbulance Factors</p>
        <hr>
        <input type="hidden" value="0" id="tru_impac">
        <div class=" mb-3 ml-2 mt-6 col-md-10">
            <table class="table table-striped col-md-7" id="supply_BEA">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col" class="tableH supplyWidth">Revenue (Low:1 - High:5)
                        </th>
                        <th scope="col" class="tableH supplyWidth">Cost (Low:1 - High:5)
                        </th>
                        <th scope="col" class="tableH supplyWidth">Growth (Low:1 - High:5)
                        </th>
                        <th scope="col" class="tableH supplyWidth">Control (None: -1, Some: 1, High:2)</th>
                        <th scope="col" class="tableH supplyWidth">Vs competitor (Above: 1, Below: 3)
                        </th>
                        <th scope="col" class="tableH supplyWidth">THREAT</th>
                        <th scope="col" class="tableH supplyWidth">OPPORTUNITY
                        </th>
                    </tr>
                </thead>

                <tbody class="trublance_tools">

                </tbody>
            </table>
            </div>
            <!--Save Data Section-->
            <div>
                <button type="button" class="btn btn-primary btn-md ml-4" onclick="trublance_tool()">Save</button>
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