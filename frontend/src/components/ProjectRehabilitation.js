import React, { useEffect, useState } from "react";
import { useParams } from "react-router-dom"
const ProjectRehabilitation = () => {
    const { id } = useParams();
    const [projects, setProjects] = useState([]);
    useEffect(() => {
        const getProjects = async () => {
            console.log(id);
            const url = process.env.REACT_APP_API_URL + "projects/rehabilitation/"+id;
            const response = await fetch(url );
            const dataJson = await response.json();
            if (response.status === 200) setProjects(dataJson.data);
            else if (response.status === 403) {
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
                        <h4 className="card-title">Project Rehabilitation</h4>
                    </div>
                    <div className="table-responsive">
                        <table className="table">
                            <thead className="thead-light">
                                <tr>
                                    <th scope='col'>#</th>
                                    <th scope='col'>Project Name </th>
                                    <th scope='col'>Date</th>
                                    <th scope='col'>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                {projects.length > 0 ? projects.map((project, index) => (
                                    <tr key={project.id}>
                                        <td>{index + 1}</td>
                                        <td>{project.project.name }</td>
                                        <td>{ project.date }</td>
                                        <td>{ project.detail }</td>
                                    </tr>
                                ))
                                    :
                                    <tr>
                                        <th colSpan={4}>No results found</th>
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
export default ProjectRehabilitation;