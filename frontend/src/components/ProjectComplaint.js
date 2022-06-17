import React, { useEffect, useState } from "react";
import { useParams } from "react-router-dom"
const ProjectComplaint = () => {
    const { id } = useParams();
    const [projects, setProjects] = useState([]);
    useEffect(() => {
        const getProjects = async () => {
            console.log(id);
            const url = process.env.REACT_APP_API_URL + "projects/complaint/"+id;
            const response = await fetch(url );
            await response.json().then(async(res) =>{
                setProjects(res.data);
            } );
            
        };
        getProjects();
    }, []);

    return (
        <div className='row'>
            <div className="col-12">
                <div className="card">
                    <div className="card-body">
                        <h4 className="card-title">Project Complaint</h4>
                    </div>
                    <div className="table-responsive">
                        <table className="table">
                            <thead className="thead-light">
                                <tr>
                                    <th scope='col'>#</th>
                                    <th scope='col'>Project Name </th>
                                    <th scope='col'>Date</th>
                                    <th scope='col'>Location</th>
                                    <th scope='col'>Complaint</th>
                                </tr>
                            </thead>
                            <tbody>
                                {projects.length > 0 ? projects.map((project, index) => (
                                    <tr key={project.id}>
                                        <td>{index + 1}</td>
                                        <td>{project.project.name }</td>
                                        <td>{project.date}</td>
                                        <td>{project.location}</td>
                                        <td>{ project.detail }</td>
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
export default ProjectComplaint;