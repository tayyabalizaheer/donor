@csrf
<div class="form-group">
    <label for="date">Date</label>
    <input type="date" name="date" id="date" class="form-control"
        value="{{ old('date',$maintenance->date) }}">
    @error('date')
    <span class="text-danger">{{$message}} </span>
    @enderror
</div>
<div class="form-group">
    <label for="location">Location</label>
    <input type="text" name="location" id="location" class="form-control" value="{{ old('location',$maintenance->location) }}">
    @error('location')
    <span class="text-danger">{{$message}} </span>
    @enderror
</div>
<div class="form-group">
    <label for="supervisor">Supervisor</label>
    <select class="form-control" name="supervisor_id" data-value="{{ old('supervisor_id',$project->supervisor_id) }}">
        <option value="">Select supervisor</option>
        @foreach ($supervisors as $supervisor)
        <option value="{{ $supervisor->id }}">{{ $supervisor->name }}</option>
        @endforeach
    </select>
    @error('supervisor_id')
    <span class="text-danger">{{$message}} </span>
    @enderror
</div>

<div class="row mt-5">
    <div class="col-12">
        <table class="table">
            <tr class="bg-black text-white">
                <th>Internal Water Filtration System</th>
                <th>Operational</th>
                <th>Clean</th>
                <th>Leakage</th>
                <th>Damage</th>
                <th>Require Maintenance</th>
                <th>Remarks</th>
            </tr>
            <tr>
                <th>Raw/Product Water Storage Tank</th>
                <td><input type="text" class="form-control" name="water_tank[operatinal]" value="{{ old('water_tank.operatinal',$maintenance->water_tank->operatinal??'') }}"></td>
                <td><input type="text" class="form-control" name="water_tank[clean]" value="{{ old('water_tank.clean',$maintenance->water_tank->clean??'') }}"></td>
                <td><input type="text" class="form-control" name="water_tank[leakage]" value="{{ old('water_tank.leakage',$maintenance->water_tank->leakage??'') }}"></td>
                <td><input type="text" class="form-control" name="water_tank[damage]" value="{{ old('water_tank.damage',$maintenance->water_tank->damage??'') }}"></td>
                <td><input type="text" class="form-control" name="water_tank[require]" value="{{ old('water_tank.require',$maintenance->water_tank->require??'') }}"></td>
                <td><input type="text" class="form-control" name="water_tank[remarks]" value="{{ old('water_tank.remarks',$maintenance->water_tank->remarks??'') }}"></td>
            </tr>
            <tr>
                <th>UV Lamps</th>
                <td><input type="text" class="form-control" name="lamps[operatinal]" value="{{ old('lamps.operatinal',$maintenance->lamps->operatinal??'') }}"></td>
                <td><input type="text" class="form-control" name="lamps[clean]" value="{{ old('lamps.clean',$maintenance->lamps->clean??'') }}"></td>
                <td><input type="text" class="form-control" name="lamps[leakage]" value="{{ old('lamps.leakage',$maintenance->lamps->leakage??'') }}"></td>
                <td><input type="text" class="form-control" name="lamps[damage]" value="{{ old('lamps.damage',$maintenance->lamps->damage??'') }}"></td>
                <td><input type="text" class="form-control" name="lamps[require]" value="{{ old('lamps.require',$maintenance->lamps->require??'') }}"></td>
                <td><input type="text" class="form-control" name="lamps[remarks]" value="{{ old('lamps.remarks',$maintenance->lamps->remarks??'') }}"></td>
            </tr>

            <tr>
                <th>Auto On/off Pressure System</th>
                <td><input type="text" class="form-control" name="pressure_system[operatinal]" value="{{ old('pressure_system.operatinal',$maintenance->pressure_system->operatinal??'') }}"></td>
                <td><input type="text" class="form-control" name="pressure_system[clean]" value="{{ old('pressure_system.clean',$maintenance->pressure_system->clean??'') }}"></td>
                <td><input type="text" class="form-control" name="pressure_system[leakage]" value="{{ old('pressure_system.leakage',$maintenance->pressure_system->leakage??'') }}"></td>
                <td><input type="text" class="form-control" name="pressure_system[damage]" value="{{ old('pressure_system.damage',$maintenance->pressure_system->damage??'') }}"></td>
                <td><input type="text" class="form-control" name="pressure_system[require]" value="{{ old('pressure_system.require',$maintenance->pressure_system->require??'') }}"></td>
                <td><input type="text" class="form-control" name="pressure_system[remarks]" value="{{ old('pressure_system.remarks',$maintenance->pressure_system->remarks??'') }}"></td>
            </tr>

            <tr>
                <th>Sand Filter</th>
                <td><input type="text" class="form-control" name="sand[operatinal]" value="{{ old('sand.operatinal',$maintenance->sand->operatinal??'') }}"></td>
                <td><input type="text" class="form-control" name="sand[clean]" value="{{ old('sand.clean',$maintenance->sand->clean??'') }}"></td>
                <td><input type="text" class="form-control" name="sand[leakage]" value="{{ old('sand.leakage',$maintenance->sand->leakage??'') }}"></td>
                <td><input type="text" class="form-control" name="sand[damage]" value="{{ old('sand.damage',$maintenance->sand->damage??'') }}"></td>
                <td><input type="text" class="form-control" name="sand[require]" value="{{ old('sand.require',$maintenance->sand->require??'') }}"></td>
                <td><input type="text" class="form-control" name="sand[remarks]" value="{{ old('sand.remarks',$maintenance->sand->remarks??'') }}"></td>
            </tr>

            <tr>
                <th>Carbon Filter</th>
                <td><input type="text" class="form-control" name="carbon[operatinal]" value="{{ old('carbon.operatinal',$maintenance->carbon->operatinal??'') }}"></td>
                <td><input type="text" class="form-control" name="carbon[clean]" value="{{ old('carbon.clean',$maintenance->carbon->clean??'') }}"></td>
                <td><input type="text" class="form-control" name="carbon[leakage]" value="{{ old('carbon.leakage',$maintenance->carbon->leakage??'') }}"></td>
                <td><input type="text" class="form-control" name="carbon[damage]" value="{{ old('carbon.damage',$maintenance->carbon->damage??'') }}"></td>
                <td><input type="text" class="form-control" name="carbon[require]" value="{{ old('carbon.require',$maintenance->carbon->require??'') }}"></td>
                <td><input type="text" class="form-control" name="carbon[remarks]" value="{{ old('carbon.remarks',$maintenance->carbon->remarks??'') }}"></td>
            </tr>


            <tr>
                <th>UF Membrane</th>
                <td><input type="text" class="form-control" name="membrane[operatinal]" value="{{ old('membrane.operatinal',$maintenance->membrane->operatinal??'') }}"></td>
                <td><input type="text" class="form-control" name="membrane[clean]" value="{{ old('membrane.clean',$maintenance->membrane->clean??'') }}"></td>
                <td><input type="text" class="form-control" name="membrane[leakage]" value="{{ old('membrane.leakage',$maintenance->membrane->leakage??'') }}"></td>
                <td><input type="text" class="form-control" name="membrane[damage]" value="{{ old('membrane.damage',$maintenance->membrane->damage??'') }}"></td>
                <td><input type="text" class="form-control" name="membrane[require]" value="{{ old('membrane.require',$maintenance->membrane->require??'') }}"></td>
                <td><input type="text" class="form-control" name="membrane[remarks]" value="{{ old('membrane.remarks',$maintenance->membrane->remarks??'') }}"></td>
            </tr>

            <tr>
                <th>4 Jumbo Filter Microns</th>
                <td><input type="text" class="form-control" name="microns[operatinal]" value="{{ old('microns.operatinal',$maintenance->microns->operatinal??'') }}"></td>
                <td><input type="text" class="form-control" name="microns[clean]" value="{{ old('microns.clean',$maintenance->microns->clean??'') }}"></td>
                <td><input type="text" class="form-control" name="microns[leakage]" value="{{ old('microns.leakage',$maintenance->microns->leakage??'') }}"></td>
                <td><input type="text" class="form-control" name="microns[damage]" value="{{ old('microns.damage',$maintenance->microns->damage??'') }}"></td>
                <td><input type="text" class="form-control" name="microns[require]" value="{{ old('microns.require',$maintenance->microns->require??'') }}"></td>
                <td><input type="text" class="form-control" name="microns[remarks]" value="{{ old('microns.remarks',$maintenance->microns->remarks??'') }}"></td>
            </tr>

            <tr>
                <th>DP Panel</th>
                <td><input type="text" class="form-control" name="panel[operatinal]" value="{{ old('panel.operatinal',$maintenance->panel->operatinal??'') }}"></td>
                <td><input type="text" class="form-control" name="panel[clean]" value="{{ old('panel.clean',$maintenance->panel->clean??'') }}"></td>
                <td><input type="text" class="form-control" name="panel[leakage]" value="{{ old('panel.leakage',$maintenance->panel->leakage??'') }}"></td>
                <td><input type="text" class="form-control" name="panel[damage]" value="{{ old('panel.damage',$maintenance->panel->damage??'') }}"></td>
                <td><input type="text" class="form-control" name="panel[require]" value="{{ old('panel.require',$maintenance->panel->require??'') }}"></td>
                <td><input type="text" class="form-control" name="panel[remarks]" value="{{ old('panel.remarks',$maintenance->panel->remarks??'') }}"></td>
            </tr>

            <tr>
                <th>Water feeding pumps</th>
                <td><input type="text" class="form-control" name="feeding_pump[operatinal]" value="{{ old('feeding_pump.operatinal',$maintenance->feeding_pump->operatinal??'') }}"></td>
                <td><input type="text" class="form-control" name="feeding_pump[clean]" value="{{ old('feeding_pump.clean',$maintenance->feeding_pump->clean??'') }}"></td>
                <td><input type="text" class="form-control" name="feeding_pump[leakage]" value="{{ old('feeding_pump.leakage',$maintenance->feeding_pump->leakage??'') }}"></td>
                <td><input type="text" class="form-control" name="feeding_pump[damage]" value="{{ old('feeding_pump.damage',$maintenance->feeding_pump->damage??'') }}"></td>
                <td><input type="text" class="form-control" name="feeding_pump[require]" value="{{ old('feeding_pump.require',$maintenance->feeding_pump->require??'') }}"></td>
                <td><input type="text" class="form-control" name="feeding_pump[remarks]" value="{{ old('feeding_pump.remarks',$maintenance->feeding_pump->remarks??'') }}"></td>
            </tr>

            <tr>
                <th>Backwash pressure gauge</th>
                <td><input type="text" class="form-control" name="backwash[operatinal]" value="{{ old('backwash.operatinal',$maintenance->backwash->operatinal??'') }}"></td>
                <td><input type="text" class="form-control" name="backwash[clean]" value="{{ old('backwash.clean',$maintenance->backwash->clean??'') }}"></td>
                <td><input type="text" class="form-control" name="backwash[leakage]" value="{{ old('backwash.leakage',$maintenance->backwash->leakage??'') }}"></td>
                <td><input type="text" class="form-control" name="backwash[damage]" value="{{ old('backwash.damage',$maintenance->backwash->damage??'') }}"></td>
                <td><input type="text" class="form-control" name="backwash[require]" value="{{ old('backwash.require',$maintenance->backwash->require??'') }}"></td>
                <td><input type="text" class="form-control" name="backwash[remarks]" value="{{ old('backwash.remarks',$maintenance->backwash->remarks??'') }}"></td>
            </tr>


            <tr>
                <th>Field Water pressure gauge</th>
                <td><input type="text" class="form-control" name="field_water[operatinal]" value="{{ old('field_water.operatinal',$maintenance->field_water->operatinal??'') }}"></td>
                <td><input type="text" class="form-control" name="field_water[clean]" value="{{ old('field_water.clean',$maintenance->field_water->clean??'') }}"></td>
                <td><input type="text" class="form-control" name="field_water[leakage]" value="{{ old('field_water.leakage',$maintenance->field_water->leakage??'') }}"></td>
                <td><input type="text" class="form-control" name="field_water[damage]" value="{{ old('field_water.damage',$maintenance->field_water->damage??'') }}"></td>
                <td><input type="text" class="form-control" name="field_water[require]" value="{{ old('field_water.require',$maintenance->field_water->require??'') }}"></td>
                <td><input type="text" class="form-control" name="field_water[remarks]" value="{{ old('field_water.remarks',$maintenance->field_water->remarks??'') }}"></td>
            </tr>
            <tr>
                <th>Final Water pressure gauge</th>
                <td><input type="text" class="form-control" name="final_water[operatinal]" value="{{ old('final_water.operatinal',$maintenance->final_water->operatinal??'') }}"></td>
                <td><input type="text" class="form-control" name="final_water[clean]" value="{{ old('final_water.clean',$maintenance->final_water->clean??'') }}"></td>
                <td><input type="text" class="form-control" name="final_water[leakage]" value="{{ old('final_water.leakage',$maintenance->final_water->leakage??'') }}"></td>
                <td><input type="text" class="form-control" name="final_water[damage]" value="{{ old('final_water.damage',$maintenance->final_water->damage??'') }}"></td>
                <td><input type="text" class="form-control" name="final_water[require]" value="{{ old('final_water.require',$maintenance->final_water->require??'') }}"></td>
                <td><input type="text" class="form-control" name="final_water[remarks]" value="{{ old('final_water.remarks',$maintenance->final_water->remarks??'') }}"></td>
            </tr>

            <tr>
                <th>Piping</th>
                <td><input type="text" class="form-control" name="piping[operatinal]" value="{{ old('piping.operatinal',$maintenance->piping->operatinal??'') }}"></td>
                <td><input type="text" class="form-control" name="piping[clean]" value="{{ old('piping.clean',$maintenance->piping->clean??'') }}"></td>
                <td><input type="text" class="form-control" name="piping[leakage]" value="{{ old('piping.leakage',$maintenance->piping->leakage??'') }}"></td>
                <td><input type="text" class="form-control" name="piping[damage]" value="{{ old('piping.damage',$maintenance->piping->damage??'') }}"></td>
                <td><input type="text" class="form-control" name="piping[require]" value="{{ old('piping.require',$maintenance->piping->require??'') }}"></td>
                <td><input type="text" class="form-control" name="piping[remarks]" value="{{ old('piping.remarks',$maintenance->piping->remarks??'') }}"></td>
            </tr>

            <tr>
                <th>Stainless Steel Skid/Powered Coated</th>
                <td><input type="text" class="form-control" name="steel_coated[operatinal]" value="{{ old('steel_coated.operatinal',$maintenance->steel_coated->operatinal??'') }}"></td>
                <td><input type="text" class="form-control" name="steel_coated[clean]" value="{{ old('steel_coated.clean',$maintenance->steel_coated->clean??'') }}"></td>
                <td><input type="text" class="form-control" name="steel_coated[leakage]" value="{{ old('steel_coated.leakage',$maintenance->steel_coated->leakage??'') }}"></td>
                <td><input type="text" class="form-control" name="steel_coated[damage]" value="{{ old('steel_coated.damage',$maintenance->steel_coated->damage??'') }}"></td>
                <td><input type="text" class="form-control" name="steel_coated[require]" value="{{ old('steel_coated.require',$maintenance->steel_coated->require??'') }}"></td>
                <td><input type="text" class="form-control" name="steel_coated[remarks]" value="{{ old('steel_coated.remarks',$maintenance->steel_coated->remarks??'') }}"></td>
            </tr>
            <tr class="bg-black text-white">
                <th colspan="7">Water Filtration Plant Hut</th>
            </tr>
            <tr>
                <th>Thermopolis Walls Conditions</th>
                <td><input type="text" class="form-control" name="thermopolis[operatinal]" value="{{ old('thermopolis.operatinal',$maintenance->thermopolis->operatinal??'') }}"></td>
                <td><input type="text" class="form-control" name="thermopolis[clean]" value="{{ old('thermopolis.clean',$maintenance->thermopolis->clean??'') }}"></td>
                <td><input type="text" class="form-control" name="thermopolis[leakage]" value="{{ old('thermopolis.leakage',$maintenance->thermopolis->leakage??'') }}"></td>
                <td><input type="text" class="form-control" name="thermopolis[damage]" value="{{ old('thermopolis.damage',$maintenance->thermopolis->damage??'') }}"></td>
                <td><input type="text" class="form-control" name="thermopolis[require]" value="{{ old('thermopolis.require',$maintenance->thermopolis->require??'') }}"></td>
                <td><input type="text" class="form-control" name="thermopolis[remarks]" value="{{ old('thermopolis.remarks',$maintenance->thermopolis->remarks??'') }}"></td>
            </tr>

            <tr>
                <th>Transparent glass Condition</th>
                <td><input type="text" class="form-control" name="transparent[operatinal]" value="{{ old('transparent.operatinal',$maintenance->transparent->operatinal??'') }}"></td>
                <td><input type="text" class="form-control" name="transparent[clean]" value="{{ old('transparent.clean',$maintenance->transparent->clean??'') }}"></td>
                <td><input type="text" class="form-control" name="transparent[leakage]" value="{{ old('transparent.leakage',$maintenance->transparent->leakage??'') }}"></td>
                <td><input type="text" class="form-control" name="transparent[damage]" value="{{ old('transparent.damage',$maintenance->transparent->damage??'') }}"></td>
                <td><input type="text" class="form-control" name="transparent[require]" value="{{ old('transparent.require',$maintenance->transparent->require??'') }}"></td>
                <td><input type="text" class="form-control" name="transparent[remarks]" value="{{ old('transparent.remarks',$maintenance->transparent->remarks??'') }}"></td>
            </tr>

            <tr>
                <th>Floor Ceramic Condition</th>
                <td><input type="text" class="form-control" name="floor_ceramic[operatinal]" value="{{ old('floor_ceramic.operatinal',$maintenance->floor_ceramic->operatinal??'') }}"></td>
                <td><input type="text" class="form-control" name="floor_ceramic[clean]" value="{{ old('floor_ceramic.clean',$maintenance->floor_ceramic->clean??'') }}"></td>
                <td><input type="text" class="form-control" name="floor_ceramic[leakage]" value="{{ old('floor_ceramic.leakage',$maintenance->floor_ceramic->leakage??'') }}"></td>
                <td><input type="text" class="form-control" name="floor_ceramic[damage]" value="{{ old('floor_ceramic.damage',$maintenance->floor_ceramic->damage??'') }}"></td>
                <td><input type="text" class="form-control" name="floor_ceramic[require]" value="{{ old('floor_ceramic.require',$maintenance->floor_ceramic->require??'') }}"></td>
                <td><input type="text" class="form-control" name="floor_ceramic[remarks]" value="{{ old('floor_ceramic.remarks',$maintenance->floor_ceramic->remarks??'') }}"></td>
            </tr>

            <tr>
                <th>Water Taps Condition</th>
                <td><input type="text" class="form-control" name="water_taps[operatinal]" value="{{ old('water_taps.operatinal',$maintenance->water_taps->operatinal??'') }}"></td>
                <td><input type="text" class="form-control" name="water_taps[clean]" value="{{ old('water_taps.clean',$maintenance->water_taps->clean??'') }}"></td>
                <td><input type="text" class="form-control" name="water_taps[leakage]" value="{{ old('water_taps.leakage',$maintenance->water_taps->leakage??'') }}"></td>
                <td><input type="text" class="form-control" name="water_taps[damage]" value="{{ old('water_taps.damage',$maintenance->water_taps->damage??'') }}"></td>
                <td><input type="text" class="form-control" name="water_taps[require]" value="{{ old('water_taps.require',$maintenance->water_taps->require??'') }}"></td>
                <td><input type="text" class="form-control" name="water_taps[remarks]" value="{{ old('water_taps.remarks',$maintenance->water_taps->remarks??'') }}"></td>
            </tr>
            <tr class="bg-black text-white">
                <th colspan="7">Inputs Conditions</th>
            </tr>
            <tr>
                <th>Electricity Supply</th>
                <td><input type="text" class="form-control" name="electricity[operatinal]" value="{{ old('electricity.operatinal',$maintenance->electricity->operatinal??'') }}"></td>
                <td><input type="text" class="form-control" name="electricity[clean]" value="{{ old('electricity.clean',$maintenance->electricity->clean??'') }}"></td>
                <td><input type="text" class="form-control" name="electricity[leakage]" value="{{ old('electricity.leakage',$maintenance->electricity->leakage??'') }}"></td>
                <td><input type="text" class="form-control" name="electricity[damage]" value="{{ old('electricity.damage',$maintenance->electricity->damage??'') }}"></td>
                <td><input type="text" class="form-control" name="electricity[require]" value="{{ old('electricity.require',$maintenance->electricity->require??'') }}"></td>
                <td><input type="text" class="form-control" name="electricity[remarks]" value="{{ old('electricity.remarks',$maintenance->electricity->remarks??'') }}"></td>
            </tr>

            <tr>
                <th>Water Supply/ Water Bore-hole</th>
                <td><input type="text" class="form-control" name="water_supply[operatinal]" value="{{ old('water_supply.operatinal',$maintenance->water_supply->operatinal??'') }}"></td>
                <td><input type="text" class="form-control" name="water_supply[clean]" value="{{ old('water_supply.clean',$maintenance->water_supply->clean??'') }}"></td>
                <td><input type="text" class="form-control" name="water_supply[leakage]" value="{{ old('water_supply.leakage',$maintenance->water_supply->leakage??'') }}"></td>
                <td><input type="text" class="form-control" name="water_supply[damage]" value="{{ old('water_supply.damage',$maintenance->water_supply->damage??'') }}"></td>
                <td><input type="text" class="form-control" name="water_supply[require]" value="{{ old('water_supply.require',$maintenance->water_supply->require??'') }}"></td>
                <td><input type="text" class="form-control" name="water_supply[remarks]" value="{{ old('water_supply.remarks',$maintenance->water_supply->remarks??'') }}"></td>
            </tr>

            <tr>
                <th>Light (Energy Savers/Bulb Check)</th>
                <td><input type="text" class="form-control" name="light[operatina]" value="{{ old('light.operatina',$maintenance->light->operatina??'') }}"></td>
                <td><input type="text" class="form-control" name="light[clean]" value="{{ old('light.clean',$maintenance->light->clean??'') }}"></td>
                <td><input type="text" class="form-control" name="light[leakag]" value="{{ old('light.leakag',$maintenance->light->leakag??'') }}"></td>
                <td><input type="text" class="form-control" name="light[damag]" value="{{ old('light.damag',$maintenance->light->damag??'') }}"></td>
                <td><input type="text" class="form-control" name="light[require]" value="{{ old('light.require',$maintenance->light->require??'') }}"></td>
                <td><input type="text" class="form-control" name="light[remark]" value="{{ old('light.remark',$maintenance->light->remark??'') }}"></td>
            </tr>

            <tr>
                <th>Wiring</th>
                <td><input type="text" class="form-control" name="wiring[operatinal]" value="{{ old('wiring.operatinal',$maintenance->wiring->operatinal??'') }}"></td>
                <td><input type="text" class="form-control" name="wiring[clean]" value="{{ old('wiring.clean',$maintenance->wiring->clean??'') }}"></td>
                <td><input type="text" class="form-control" name="wiring[leakage]" value="{{ old('wiring.leakage',$maintenance->wiring->leakage??'') }}"></td>
                <td><input type="text" class="form-control" name="wiring[damage]" value="{{ old('wiring.damage',$maintenance->wiring->damage??'') }}"></td>
                <td><input type="text" class="form-control" name="wiring[require]" value="{{ old('wiring.require',$maintenance->wiring->require??'') }}"></td>
                <td><input type="text" class="form-control" name="wiring[remarks]" value="{{ old('wiring.remarks',$maintenance->wiring->remarks??'') }}"></td>
            </tr>

            <tr>
                <th>Muslim Hands Banners/Noticeboard Conditions</th>
                <td><input type="text" class="form-control" name="banner[operatinal]" value="{{ old('banner.operatinal',$maintenance->banner->operatinal??'') }}"></td>
                <td><input type="text" class="form-control" name="banner[clean]" value="{{ old('banner.clean',$maintenance->banner->clean??'') }}"></td>
                <td><input type="text" class="form-control" name="banner[leakage]" value="{{ old('banner.leakage',$maintenance->banner->leakage??'') }}"></td>
                <td><input type="text" class="form-control" name="banner[damage]" value="{{ old('banner.damage',$maintenance->banner->damage??'') }}"></td>
                <td><input type="text" class="form-control" name="banner[require]" value="{{ old('banner.require',$maintenance->banner->require??'') }}"></td>
                <td><input type="text" class="form-control" name="banner[remarks]" value="{{ old('banner.remarks',$maintenance->banner->remarks??'') }}"></td>
            </tr>

            <tr class="bg-black text-white">
                <th>Water Quality Test</th>
                <td>Standard Reading</td>
                <td>Reading</td>
                <td>Reading Date</td>
                <td colspan="3"></td>
            </tr>

            <tr>
                <th>PH Test</th>
                <td>0-14</td>
                <td><input type="text" class="form-control" name="ph[reading]" value="{{ old('ph.reading',$maintenance->ph->reading??'') }}"></td>
                <td><input type="date" class="form-control" name="ph[reading_date]" value="{{ old('ph.reading_date',$maintenance->ph->reading_date??'') }}"></td>
                <td></td>
                <td colspan="2"><input type="text" class="form-control" name="ph[remarks]" value="{{ old('ph.remarks',$maintenance->ph->remarks??'') }}"></td>
            </tr>

            <tr>
                <th>Turbidity Test</th>
                <td>5TNU</td>
                <td><input type="text" class="form-control" name="turbidity[reading]" value="{{ old('turbidity.reading',$maintenance->turbidity->reading??'') }}"></td>
                <td><input type="date" class="form-control" name="turbidity[reading_date]" value="{{ old('turbidity.reading_date',$maintenance->turbidity->reading_date??'') }}"></td>
                <td></td>
                <td colspan="2"><input type="text" class="form-control" name="turbidity[remarks]" value="{{ old('turbidity.remarks',$maintenance->turbidity->remarks??'') }}"></td>
            </tr>

            <tr>
                <th>TDS Test</th>
                <td>100-500</td>
                <td><input type="text" class="form-control" name="tds[reading]" value="{{ old('tds.reading',$maintenance->tds->reading??'') }}"></td>
                <td><input type="date" class="form-control" name="tds[reading_date]" value="{{ old('tds.reading_date',$maintenance->tds->reading_date??'') }}"></td>
                <td></td>
                <td colspan="2"><input type="text" class="form-control" name="tds[remarks]" value="{{ old('tds.remarks',$maintenance->tds->remarks??'') }}"></td>
            </tr>

            <tr>
                <th>Water Odour</th>
                <td>Odourless</td>
                <td><input type="text" class="form-control" name="odour[reading]" value="{{ old('odour.reading',$maintenance->odour->reading??'') }}"></td>
                <td><input type="date" class="form-control" name="odour[reading_date]" value="{{ old('odour.reading_date',$maintenance->odour->reading_date??'') }}"></td>
                <td></td>
                <td colspan="2"><input type="text" class="form-control" name="odour[remarks]" value="{{ old('odour.remarks',$maintenance->odour->remarks??'') }}"></td>
            </tr>

            <tr>
                <th>Water Taste</th>
                <td>Tasteless</td>
                <td><input type="text" class="form-control" name="taste[reading]" value="{{ old('taste.reading',$maintenance->taste->reading??'') }}"></td>
                <td><input type="date" class="form-control" name="taste[reading_date]" value="{{ old('taste.reading_date',$maintenance->taste->reading_date??'') }}"></td>
                <td></td>
                <td colspan="2"><input type="text" class="form-control" name="taste[remarks]" value="{{ old('taste.remarks',$maintenance->taste->remarks??'') }}"></td>
            </tr>
            <tr>
                <th>Water Colour</th>
                <td>Colourless</td>
                <td><input type="text" class="form-control" name="colour[reading]" value="{{ old('colour.reading',$maintenance->colour->reading??'') }}"></td>
                <td><input type="date" class="form-control" name="colour[reading_date]" value="{{ old('colour.reading_date',$maintenance->colour->reading_date??'') }}"></td>
                <td></td>
                <td colspan="2"><input type="text" class="form-control" name="colour[remarks]" value="{{ old('colour.remarks',$maintenance->colour->remarks??'') }}"></td>
            </tr>

            <tr class="bg-black text-white">
                <th>Maintenance</th>
                <td>Require Maintenance</td>
                <td>Last Maintenance Date</td>
                <td>Next Maintenance Date</td>
                <td></td>
                <td colspan="2"></td>
            </tr>

            <tr>
                <th>Back Washing</th>
                <td><input type="text" class="form-control" name="back_washing[reading]" value="{{ old('back_washing.reading',$maintenance->back_washing->reading??'' ) }}"></td>
                <td><input type="date" class="form-control" name="back_washing[reading_date]" value="{{ old('back_washing.reading_date',$maintenance->back_washing->reading_date??'') }}"></td>
                <td><input type="date" class="form-control" name="back_washing[reading_date]" value="{{ old('back_washing.reading_date',$maintenance->back_washing->reading_date??'') }}"></td>
                <td></td>
                <td colspan="2"><input type="text" class="form-control" name="back_washing[remarks]" value="{{ old('back_washing.remarks',$maintenance->back_washing->remarks??'') }}"></td>
            </tr>

            <tr>
                <th>Changing of 1st and 2nd Jumbo filters 0.5 Micron</th>
                <td><input type="text" class="form-control" name="jumbo_filter1[reading]" value="{{ old('jumbo_filter1.reading',$maintenance->jumbo_filter1->reading??'' ) }}"></td>
                <td><input type="date" class="form-control" name="jumbo_filter1[reading_date]" value="{{ old('jumbo_filter1.reading_date',$maintenance->jumbo_filter1->reading_date??'') }}"></td>
                <td><input type="date" class="form-control" name="jumbo_filter1[reading_date]" value="{{ old('jumbo_filter1.reading_date',$maintenance->jumbo_filter1->reading_date??'') }}"></td>
                <td></td>
                <td colspan="2"><input type="text" class="form-control" name="jumbo_filter1[remarks]" value="{{ old('jumbo_filter1.remarks',$maintenance->jumbo_filter1->remarks??'') }}"></td>
            </tr>
            <tr>
                <th>Changing of 3rd and 4Th Jumbo filters 0 Micron</th>
                <td><input type="text" class="form-control" name="jumbo_filter2[reading]" value="{{ old('jumbo_filter2.reading',$maintenance->jumbo_filter2->reading??'' ) }}"></td>
                <td><input type="date" class="form-control" name="jumbo_filter2[reading_date]" value="{{ old('jumbo_filter2.reading_date',$maintenance->jumbo_filter2->reading_date??'') }}"></td>
                <td><input type="date" class="form-control" name="jumbo_filter2[reading_date]" value="{{ old('jumbo_filter2.reading_date',$maintenance->jumbo_filter2->reading_date??'') }}"></td>
                <td></td>
                <td colspan="2"><input type="text" class="form-control" name="jumbo_filter2[remarks]" value="{{ old('jumbo_filter2.remarks',$maintenance->jumbo_filter2->remarks??'') }}"></td>
            </tr>

            <tr class="bg-black text-white">
                <th>Security & Complaints</th>
                <td colspan="3">Observation</td>
                <td colspan="3">Require Maintenance</td>
            </tr>

            <tr>
                <th>Wall Chalking</th>
                <td colspan="3"><input type="text" class="form-control" name="wall_chalking[reading]"
                    value="{{ old('wall_chalking.reading',$maintenance->wall_chalking->reading??'' ) }}"></td>
                <td colspan="3"><input type="text" class="form-control" name="wall_chalking[require]"
                    value="{{ old('wall_chalking.require',$maintenance->wall_chalking->require??'' ) }}"></td>
            </tr>

            <tr>
                <th>Commercial Poster</th>
                <td colspan="3"><input type="text" class="form-control" name="poster[reading]"
                        value="{{ old('poster.reading',$maintenance->poster->reading??'' ) }}"></td>
                <td colspan="3"><input type="text" class="form-control" name="poster[require]"
                        value="{{ old('poster.require',$maintenance->poster->require??'' ) }}"></td>
            </tr>

            <tr>
                <th>Sweep/cleaning of the vacinity</th>
                <td colspan="3"><input type="text" class="form-control" name="cleening[reading]"
                        value="{{ old('cleening.reading',$maintenance->cleening->reading??'' ) }}"></td>
                <td colspan="3"><input type="text" class="form-control" name="cleening[require]"
                        value="{{ old('cleening.require',$maintenance->cleening->require??'' ) }}"></td>
            </tr>
            <tr>
                <th>Rubbish Dumping surrounding WFP</th>
                <td colspan="3"><input type="text" class="form-control" name="rubbish[reading]"
                        value="{{ old('rubbish.reading',$maintenance->rubbish->reading??'' ) }}"></td>
                <td colspan="3"><input type="text" class="form-control" name="rubbish[require]"
                        value="{{ old('rubbish.require',$maintenance->rubbish->require??'' ) }}"></td>
            </tr>

            <tr>
                <th>Parking Area well maintained</th>
                <td colspan="3"><input type="text" class="form-control" name="parking[reading]"
                        value="{{ old('parking.reading',$maintenance->parking->reading??'' ) }}"></td>
                <td colspan="3"><input type="text" class="form-control" name="parking[require]"
                        value="{{ old('parking.require',$maintenance->parking->require??'' ) }}"></td>
            </tr>

            <tr>
                <th>Other Damages</th>
                <td colspan="3"><input type="text" class="form-control" name="other[reading]"
                        value="{{ old('other.reading',$maintenance->other->reading??'' ) }}"></td>
                <td colspan="3"><input type="text" class="form-control" name="other[require]"
                        value="{{ old('other.require',$maintenance->other->require??'' ) }}"></td>
            </tr>
        </table>
    </div>
</div>

<div class="row justify-content-end mt-5">
    <div class="form-group col-4">
        <label for="supervisor">Operator</label>
        <select class="form-control" name="operator_id" data-value="{{ old('operator_id',$project->operator_id) }}">
            <option value="">Select operator</option>
            @foreach ($operators as $operator)
            <option value="{{ $operator->id }}">{{ $operator->name }}</option>
            @endforeach
        </select>
        @error('operator_id')
        <span class="text-danger">{{$message}} </span>
        @enderror
    </div>

    <div class="form-group col-4">
        <label for="coordinator">Coordinator</label>
        <select class="form-control" name="coordinator_id" data-value="{{ old('coordinator_id',$project->coordinator_id) }}">
            <option value="">Select coordinator</option>
            @foreach ($coordinators as $coordinator)
            <option value="{{ $coordinator->id }}">{{ $coordinator->name }}</option>
            @endforeach
        </select>
        @error('coordinator_id')
        <span class="text-danger">{{$message}} </span>
        @enderror
    </div>
</div>
