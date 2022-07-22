import React, { useEffect, useState } from "react";
import { Link, useNavigate } from 'react-router-dom';
import $ from 'jquery';

const Login = () => {
    // const [projects, setProjects] = useState([]);
    const navigate = useNavigate();
    useEffect(() => {
        if(localStorage.getItem('user')){
            navigate('/');
        }
    }, []);
    
    const handleLoginSubmit = async (event)=>{
        event.preventDefault();
        let data = convertFormToJSON($(event.currentTarget));
        const payload = new FormData(event.currentTarget);

        console.log('sumbit click', data, event.currentTarget, $(event.currentTarget), payload, $(this));
        const url = process.env.REACT_APP_API_URL + "login";
        const response = await fetch(url,{
            method : 'POST',
            body: payload
        });
        const dataJson = await response.json();
        // setProjects(dataJson.data);
        localStorage.setItem('user', JSON.stringify(dataJson));
        navigate('/');
        console.log(dataJson);
    }
    const convertFormToJSON = (form) =>{
        return $(form)
            .serializeArray()
            .reduce(function (json, { name, value }) {
                json[name] = value;
                return json;
            }, {});
    }
    return (
        <div className='row'>
            <div className="col-12">
                <div className="card">
                    <div className="card-header">
                        <h4 className="card-title">Login Page</h4>
                    </div>
                    <div className="card-body">
                        <div className="row justify-content-center">
                            <div className="col-12 col-md-6">
                                <form onSubmit={handleLoginSubmit}>
                                    <div className="form-group">
                                        <label htmlFor="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" className="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                                    </div>
                                    <div className="form-group">
                                        <label htmlFor="exampleInputPassword1">Password</label>
                                        <input type="password" name="password" className="form-control" id="exampleInputPassword1" />
                                    </div>

                                    <button type="submit" className="btn btn-primary">Submit</button>
                                </form> 
                            </div>
                        </div>
                          
                    </div>
                </div>
            </div>
        </div>
    );
};
export default Login;