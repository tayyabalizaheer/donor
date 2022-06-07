import React, { useEffect, useState } from "react";
import { Link } from 'react-router-dom';

const CompletedProject = () => {
    const [projects, setProjects] = useState([]);
    useEffect(() => {
        const getProjects = async () => {
            const url = process.env.REACT_APP_API_URL + "projects/completed";
            const response = await fetch(url );
            const dataJson = await response.json();
            setProjects(dataJson.data);
            console.log(dataJson);
        };
        getProjects();
    }, []);

    return (
        <div className='row'>
            <div className="col-12">
                <div className="card">
                    <div className="card-body">
                        <h4 className="card-title">Completed Project</h4>
                        <h6 className="card-subtitle">Details of locations, installation date, installed duration, re-habilitation date, maintenance of completed projects.</h6>
                    </div>
                    <div className="table-responsive">
                        <table className="table">
                            <thead className="thead-light">
                                <tr>
                                    <th scope='col'>#</th>
                                    <th scope='col'>Name </th>
                                    <th scope='col'>District</th>
                                    <th scope='col'>Tehsil</th>
                                    <th scope='col'>Area</th>
                                    <th scope='col'>Installation Date</th>
                                    <th scope='col'>Rehabilitation Due Date</th>
                                    <th scope='col'>Maintenance Due Date</th>
                                    <th scope='col'>Rehabilitation Log</th>
                                    <th scope='col'>Maintenance Log</th>
                                    <th scope='col'>Complaint Log</th>
                                    <th scope='col'>Beneficiaries</th>
                                    <th scope='col'>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                {projects.length > 0 ? projects.map((project, index) => (
                                    <tr key={project.id}>
                                        <td>{index + 1}</td>
                                        <td>{ project.name }</td>
                                        <td>{ project.district }</td>
                                        <td>{ project.tehsil }</td>
                                        <td>{ project.area }</td>
                                        <td>{project.installation_date }</td>
                                        <td>{project.rehabilitation_date }</td>
                                        <td>{project.maintenance_date }</td>
                                        <td> <Link to={`/project/rehab/${project.id}`} >View</Link>  </td>
                                        <td> <Link to={`/project/maintenance/${project.id}`} >View</Link>  </td>
                                        <td> <Link to={`/project/complaint/${project.id}`} >View</Link>  </td>
                                    </tr>
                                ))
                                    :
                                    <tr>
                                        <th colSpan={11}>No results found</th>
                                    </tr>
                                }
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    );
};
export default CompletedProject;