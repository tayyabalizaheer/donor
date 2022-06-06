import React, { useEffect, useState } from "react";
import { useParams } from "react-router-dom"
const ProjectRehabilitation = () => {
    const { id } = useParams();
    console.log(id);
    const [projects, setProjects] = useState([]);
    useEffect(() => {
        const getProjects = async () => {
            const url = process.env.REACT_APP_API_URL + "projects/on-going";
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
                        <h4 className="card-title">Ongoing Project</h4>
                        <h6 className="card-subtitle">Details of locations, date, supervisors and coordinators of on going projects.</h6>
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
                                    <th scope='col'>Tentative Completion Date</th>
                                    <th scope='col'>Project Supervisor</th>
                                    <th scope='col'>Project Coordinator</th>
                                </tr>
                            </thead>
                            <tbody>
                                {projects.map((project, index) => (
                                    <tr key={project.id}>
                                        <td>{index + 1}</td>
                                        <td>{ project.name }</td>
                                        <td>{ project.district }</td>
                                        <td>{ project.tehsil }</td>
                                        <td>{ project.area }</td>
                                        <td>{ project.completion_date}</td>
                                        <td>{ project.supervisor_user.name ?? ''}</td>
                                        <td>{ project.coordinator_user.name ?? ''}</td>
                                    </tr>
                                ))}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    );
};
export default ProjectRehabilitation;