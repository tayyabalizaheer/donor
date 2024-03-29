import React, { useEffect, useState } from "react";
import { User } from "../utils/Function";
const OnGoingProject = () => {
    const [projects, setProjects] = useState([]);
    useEffect(() => {
        const getProjects = async () => {
            const url = process.env.REACT_APP_API_URL + "projects/on-going";
            const response = await fetch(url,
                {
                    headers: {
                        'apitoken': User().apitoken,
                    },
                }
            );
            const dataJson = await response.json();
            if (response.status===200)setProjects(dataJson.data);
            else if (response.status===403){
                localStorage.setItem('user', '');
                navigator('/');                
            }
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
                                    <th scope='col'>Step</th>
                                    <th scope='col'>Tentative Completion Date</th>
                                    <th scope='col'>Project Supervisor</th>
                                    <th scope='col'>Project Coordinator</th>
                                </tr>
                            </thead>
                            <tbody>
                                {projects.length > 0 ? projects.map((project, index) => (
                                    <tr key={project.id}>
                                        <td>{index + 1}</td>
                                        <td>{ project.name }</td>
                                        <td>{ project.district }</td>
                                        <td>{ project.tehsil }</td>
                                        <td>{project.area}</td>
                                        <td>{project.step}</td>
                                        <td>{ project.completion_date}</td>
                                        <td>{ project.supervisor_user.name ?? ''}</td>
                                        <td>{ project.coordinator_user.name ?? ''}</td>
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
export default OnGoingProject;