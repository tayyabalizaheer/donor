import React, { useEffect, useState } from "react";
import { Link, useParams } from "react-router-dom"
const MaintenanceDetail = () => {
    const { id } = useParams();
    const [project, setProject] = useState([]);
    useEffect(() => {
        const getProjects = async () => {
            const url = process.env.REACT_APP_API_URL + "maintenance/details/"+id;
            const response = await fetch(url );
            await response.json().then(async (res) => {
                setProject(res);
            });
        };
        getProjects();
    }, []);
    console.log(project);
    return (
        <div className="col-12 maintenance-detail">
            <div className="form-group">
                <label htmlFor="date">Date</label>
                {project.date}
            </div>
            <div className="form-group">
                <label htmlFor="location">Location</label> 
                {project.location}
            </div>
            <div className="form-group">
                <label htmlFor="supervisor">Supervisor</label>
                {project.supervisor && project.supervisor.name}
            </div>
            <div className="row mt-5">
                <div className="col-12">
                    <table className="table">
                        <tr className="bg-secondary text-white">
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
                            <td> {project.water_tank && project.water_tank.operatinal }</td>
                            <td> {project.water_tank && project.water_tank.clean }</td>
                            <td> {project.water_tank && project.water_tank.leakage }</td>
                            <td> {project.water_tank && project.water_tank.damage }</td>
                            <td> {project.water_tank && project.water_tank.require }</td>
                            <td> {project.water_tank && project.water_tank.remarks }</td>
                        </tr>
                        <tr>
                            <th>UV Lamps</th>
                            <td> {project.lamps && project.lamps.operatinal }</td>
                            <td> {project.lamps && project.lamps.clean }</td>
                            <td> {project.lamps && project.lamps.leakage }</td>
                            <td> {project.lamps && project.lamps.damage }</td>
                            <td> {project.lamps && project.lamps.require }</td>
                            <td> {project.lamps && project.lamps.remarks }</td>
                        </tr>

                        <tr>
                            <th>Auto On/off Pressure System</th>
                            <td> {project.pressure_system && project.pressure_system.operatinal }</td>
                            <td> {project.pressure_system && project.pressure_system.clean }</td>
                            <td> {project.pressure_system && project.pressure_system.leakage }</td>
                            <td> {project.pressure_system && project.pressure_system.damage }</td>
                            <td> {project.pressure_system && project.pressure_system.require }</td>
                            <td> {project.pressure_system && project.pressure_system.remarks }</td>
                        </tr>

                        <tr>
                            <th>Sand Filter</th>
                            <td> {project.sand && project.sand.operatinal }</td>
                            <td> {project.sand && project.sand.clean }</td>
                            <td> {project.sand && project.sand.leakage }</td>
                            <td> {project.sand && project.sand.damage }</td>
                            <td> {project.sand && project.sand.require }</td>
                            <td> {project.sand && project.sand.remarks }</td>
                        </tr>

                        <tr>
                            <th>Carbon Filter</th>
                            <td> {project.carbon && project.carbon.operatinal }</td>
                            <td> {project.carbon && project.carbon.clean }</td>
                            <td> {project.carbon && project.carbon.leakage }</td>
                            <td> {project.carbon && project.carbon.damage }</td>
                            <td> {project.carbon && project.carbon.require }</td>
                            <td> {project.carbon && project.carbon.remarks }</td>
                        </tr>


                        <tr>
                            <th>UF Membrane</th>
                            <td> {project.membrane && project.membrane.operatinal }</td>
                            <td> {project.membrane && project.membrane.clean }</td>
                            <td> {project.membrane && project.membrane.leakage }</td>
                            <td> {project.membrane && project.membrane.damage }</td>
                            <td> {project.membrane && project.membrane.require }</td>
                            <td> {project.membrane && project.membrane.remarks }</td>
                        </tr>

                        <tr>
                            <th>4 Jumbo Filter Microns</th>
                            <td> {project.microns && project.microns.operatinal }</td>
                            <td> {project.microns && project.microns.clean }</td>
                            <td> {project.microns && project.microns.leakage }</td>
                            <td> {project.microns && project.microns.damage }</td>
                            <td> {project.microns && project.microns.require }</td>
                            <td> {project.microns && project.microns.remarks }</td>
                        </tr>

                        <tr>
                            <th>DP Panel</th>
                            <td> {project.panel && project.panel.operatinal }</td>
                            <td> {project.panel && project.panel.clean }</td>
                            <td> {project.panel && project.panel.leakage }</td>
                            <td> {project.panel && project.panel.damage }</td>
                            <td> {project.panel && project.panel.require }</td>
                            <td> {project.panel && project.panel.remarks }</td>
                        </tr>

                        <tr>
                            <th>Water feeding pumps</th>
                            <td> {project.feeding_pump && project.feeding_pump.operatinal }</td>
                            <td> {project.feeding_pump && project.feeding_pump.clean }</td>
                            <td> {project.feeding_pump && project.feeding_pump.leakage }</td>
                            <td> {project.feeding_pump && project.feeding_pump.damage }</td>
                            <td> {project.feeding_pump && project.feeding_pump.require }</td>
                            <td> {project.feeding_pump && project.feeding_pump.remarks }</td>
                        </tr>

                        <tr>
                            <th>Backwash pressure gauge</th>
                            <td> {project.backwash && project.backwash.operatinal }</td>
                            <td> {project.backwash && project.backwash.clean }</td>
                            <td> {project.backwash && project.backwash.leakage }</td>
                            <td> {project.backwash && project.backwash.damage }</td>
                            <td> {project.backwash && project.backwash.require }</td>
                            <td> {project.backwash && project.backwash.remarks }</td>
                        </tr>


                        <tr>
                            <th>Field Water pressure gauge</th>
                            <td> {project.field_water && project.field_water.operatinal }</td>
                            <td> {project.field_water && project.field_water.clean }</td>
                            <td> {project.field_water && project.field_water.leakage }</td>
                            <td> {project.field_water && project.field_water.damage }</td>
                            <td> {project.field_water && project.field_water.require }</td>
                            <td> {project.field_water && project.field_water.remarks }</td>
                        </tr>
                        <tr>
                            <th>Final Water pressure gauge</th>
                            <td> {project.final_water && project.final_water.operatinal }</td>
                            <td> {project.final_water && project.final_water.clean }</td>
                            <td> {project.final_water && project.final_water.leakage }</td>
                            <td> {project.final_water && project.final_water.damage }</td>
                            <td> {project.final_water && project.final_water.require }</td>
                            <td> {project.final_water && project.final_water.remarks }</td>
                        </tr>

                        <tr>
                            <th>Piping</th>
                            <td> {project.piping && project.piping.operatinal }</td>
                            <td> {project.piping && project.piping.clean }</td>
                            <td> {project.piping && project.piping.leakage }</td>
                            <td> {project.piping && project.piping.damage }</td>
                            <td> {project.piping && project.piping.require }</td>
                            <td> {project.piping && project.piping.remarks }</td>
                        </tr>

                        <tr>
                            <th>Stainless Steel Skid/Powered Coated</th>
                            <td> {project.piping && project.steel_coated.operatinal }</td>
                            <td> {project.piping && project.steel_coated.clean }</td>
                            <td> {project.piping && project.steel_coated.leakage }</td>
                            <td> {project.piping && project.steel_coated.damage }</td>
                            <td> {project.piping && project.steel_coated.require }</td>
                            <td> {project.piping && project.steel_coated.remarks }</td>
                        </tr>
                        <tr className="bg-secondary text-white">
                            <th colspan="7">Water Filtration Plant Hut</th>
                        </tr>
                        <tr>
                            <th>Thermopolis Walls Conditions</th>
                            <td> {project.thermopolis && project.thermopolis.operatinal }</td>
                            <td> {project.thermopolis && project.thermopolis.clean }</td>
                            <td> {project.thermopolis && project.thermopolis.leakage }</td>
                            <td> {project.thermopolis && project.thermopolis.damage }</td>
                            <td> {project.thermopolis && project.thermopolis.require }</td>
                            <td> {project.thermopolis && project.thermopolis.remarks }</td>
                        </tr>

                        <tr>
                            <th>Transparent glass Condition</th>
                            <td> {project.thermopolis && project.transparent.operatinal }</td>
                            <td> {project.thermopolis && project.transparent.clean }</td>
                            <td> {project.thermopolis && project.transparent.leakage }</td>
                            <td> {project.thermopolis && project.transparent.damage }</td>
                            <td> {project.thermopolis && project.transparent.require }</td>
                            <td> {project.thermopolis && project.transparent.remarks }</td>
                        </tr>

                        <tr>
                            <th>Floor Ceramic Condition</th>
                            <td> {project.floor_ceramic && project.floor_ceramic.operatinal }</td>
                            <td> {project.floor_ceramic && project.floor_ceramic.clean }</td>
                            <td> {project.floor_ceramic && project.floor_ceramic.leakage }</td>
                            <td> {project.floor_ceramic && project.floor_ceramic.damage }</td>
                            <td> {project.floor_ceramic && project.floor_ceramic.require }</td>
                            <td> {project.floor_ceramic && project.floor_ceramic.remarks }</td>
                        </tr>

                        <tr>
                            <th>Water Taps Condition</th>
                            <td> {project.water_taps && project.water_taps.operatinal }</td>
                            <td> {project.water_taps && project.water_taps.clean }</td>
                            <td> {project.water_taps && project.water_taps.leakage }</td>
                            <td> {project.water_taps && project.water_taps.damage }</td>
                            <td> {project.water_taps && project.water_taps.require }</td>
                            <td> {project.water_taps && project.water_taps.remarks }</td>
                        </tr>
                        <tr className="bg-secondary text-white">
                            <th colspan="7">Inputs Conditions</th>
                        </tr>
                        <tr>
                            <th>Electricity Supply</th>
                            <td> {project.electricity && project.electricity.operatinal }</td>
                            <td> {project.electricity && project.electricity.clean }</td>
                            <td> {project.electricity && project.electricity.leakage }</td>
                            <td> {project.electricity && project.electricity.damage }</td>
                            <td> {project.electricity && project.electricity.require }</td>
                            <td> {project.electricity && project.electricity.remarks }</td>
                        </tr>

                        <tr>
                            <th>Water Supply/ Water Bore-hole</th>
                            <td> {project.water_supply && project.water_supply.operatinal }</td>
                            <td> {project.water_supply && project.water_supply.clean }</td>
                            <td> {project.water_supply && project.water_supply.leakage }</td>
                            <td> {project.water_supply && project.water_supply.damage }</td>
                            <td> {project.water_supply && project.water_supply.require }</td>
                            <td> {project.water_supply && project.water_supply.remarks }</td>
                        </tr>

                        <tr>
                            <th>Light (Energy Savers/Bulb Check)</th>
                            <td> {project.light && project.light.operatina }</td>
                            <td> {project.light && project.light.clean }</td>
                            <td> {project.light && project.light.leakag }</td>
                            <td> {project.light && project.light.damag }</td>
                            <td> {project.light && project.light.require }</td>
                            <td> {project.light && project.light.remark }</td>
                        </tr>

                        <tr>
                            <th>Wiring</th>
                            <td> {project.wiring && project.wiring.operatinal }</td>
                            <td> {project.wiring && project.wiring.clean }</td>
                            <td> {project.wiring && project.wiring.leakage }</td>
                            <td> {project.wiring && project.wiring.damage }</td>
                            <td> {project.wiring && project.wiring.require }</td>
                            <td> {project.wiring && project.wiring.remarks }</td>
                        </tr>

                        <tr>
                            <th>Muslim Hands Banners/Noticeboard Conditions</th>
                            <td> {project.banner && project.banner.operatinal }</td>
                            <td> {project.banner && project.banner.clean }</td>
                            <td> {project.banner && project.banner.leakage }</td>
                            <td> {project.banner && project.banner.damage }</td>
                            <td> {project.banner && project.banner.require }</td>
                            <td> {project.banner && project.banner.remarks }</td>
                        </tr>

                        <tr className="bg-secondary text-white">
                            <th>Water Quality Test</th>
                            <td>Standard Reading</td>
                            <td>Reading</td>
                            <td>Reading Date</td>
                            <td colspan="3"></td>
                        </tr>

                        <tr>
                            <th>PH Test</th>
                            <td>0-14</td>
                            <td> {project.ph && project.ph.reading }</td>
                            <td>{project.ph && project.ph.reading_date }</td>
                            <td></td>
                            <td colspan="2"> {project.ph && project.ph.remarks }</td>
                        </tr>

                        <tr>
                            <th>Turbidity Test</th>
                            <td>5TNU</td>
                            <td> {project.turbidity && project.turbidity.reading }</td>
                            <td>{project.turbidity && project.turbidity.reading_date }</td>
                            <td></td>
                            <td colspan="2"> {project.turbidity && project.turbidity.remarks }</td>
                        </tr>

                        <tr>
                            <th>TDS Test</th>
                            <td>100-500</td>
                            <td> {project.tds && project.tds.reading }</td>
                            <td>{project.tds && project.tds.reading_date }</td>
                            <td></td>
                            <td colspan="2"> {project.tds && project.tds.remarks }</td>
                        </tr>

                        <tr>
                            <th>Water Odour</th>
                            <td>Odourless</td>
                            <td> {project.odour && project.odour.reading }</td>
                            <td>{project.odour && project.odour.reading_date }</td>
                            <td></td>
                            <td colspan="2"> {project.odour && project.odour.remarks }</td>
                        </tr>

                        <tr>
                            <th>Water Taste</th>
                            <td>Tasteless</td>
                            <td> {project.taste && project.taste.reading }</td>
                            <td>{project.taste && project.taste.reading_date }</td>
                            <td></td>
                            <td colspan="2"> {project.taste && project.taste.remarks }</td>
                        </tr>
                        <tr>
                            <th>Water Colour</th>
                            <td>Colourless</td>
                            <td> {project.colour && project.colour.reading }</td>
                            <td>{project.colour && project.colour.reading_date }</td>
                            <td></td>
                            <td colspan="2"> {project.colour && project.colour.remarks }</td>
                        </tr>

                        <tr className="bg-secondary text-white">
                            <th>Maintenance</th>
                            <td>Require Maintenance</td>
                            <td>Last Maintenance Date</td>
                            <td>Next Maintenance Date</td>
                            <td></td>
                            <td colspan="2"></td>
                        </tr>

                        <tr>
                            <th>Back Washing</th>
                            <td> {project.back_washing && project.back_washing.reading }</td>
                            <td>{project.back_washing && project.back_washing.reading_date }</td>
                            <td>{project.back_washing && project.back_washing.reading_date }</td>
                            <td></td>
                            <td colspan="2"> {project.back_washing && project.back_washing.remarks }</td>
                        </tr>

                        <tr>
                            <th>Changing of 1st and 2nd Jumbo filters 0.5 Micron</th>
                            <td> {project.jumbo_filter1 && project.jumbo_filter1.reading }</td>
                            <td>{project.jumbo_filter1 && project.jumbo_filter1.reading_date }</td>
                            <td>{project.jumbo_filter1 && project.jumbo_filter1.reading_date }</td>
                            <td></td>
                            <td colspan="2"> {project.jumbo_filter1 && project.jumbo_filter1.remarks }</td>
                        </tr>
                        <tr>
                            <th>Changing of 3rd and 4Th Jumbo filters 0 Micron</th>
                            <td> {project.jumbo_filter2 && project.jumbo_filter2.reading }</td>
                            <td>{project.jumbo_filter2 && project.jumbo_filter2.reading_date }</td>
                            <td>{project.jumbo_filter2 && project.jumbo_filter2.reading_date }</td>
                            <td></td>
                            <td colspan="2"> {project.jumbo_filter2 && project.jumbo_filter2.remarks }</td>
                        </tr>

                        <tr className="bg-secondary text-white">
                            <th>Security & Complaints</th>
                            <td colspan="3">Observation</td>
                            <td colspan="3">Require Maintenance</td>
                        </tr>

                        <tr>
                            <th>Wall Chalking</th>
                            <td colspan="3"> {project.wall_chalking && project.wall_chalking.reading } </td>
                            <td colspan="3"> {project.wall_chalking && project.wall_chalking.require } </td>
                        </tr>

                        <tr>
                            <th>Commercial Poster</th>
                            <td colspan="3"> {project.poster && project.poster.reading }</td>
                            <td colspan="3"> {project.poster && project.poster.require }</td>
                        </tr>

                        <tr>
                            <th>Sweep/cleaning of the vacinity</th>
                            <td colspan="3"> {project.cleening && project.cleening.reading } </td>
                            <td colspan="3"> {project.cleening && project.cleening.require } </td>
                        </tr>
                        <tr>
                            <th>Rubbish Dumping surrounding WFP</th>
                            <td colspan="3"> {project.rubbish && project.rubbish.reading } </td>
                            <td colspan="3"> {project.rubbish && project.rubbish.require } </td>
                        </tr>

                        <tr>
                            <th>Parking Area well maintained</th>
                            <td colspan="3"> {project.parking && project.parking.reading } </td>
                            <td colspan="3"> {project.parking && project.parking.require } </td>
                        </tr>

                        <tr>
                            <th>Other Damages</th>
                            <td colspan="3"> {project.other && project.other.reading }</td>
                            <td colspan="3"> {project.other && project.other.require }</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div className="row justify-content-end mt-5">
                <div className="form-group col-4">
                    <label htmlFor="supervisor">Operator</label>
                    {project.operator && project.operator.name }
                </div>

                <div className="form-group col-4">
                    <label htmlFor="coordinator">Coordinator</label>
                    {project.coordinator && project.coordinator.name }
                </div>
            </div>
        </div>
    );
};
export default MaintenanceDetail;