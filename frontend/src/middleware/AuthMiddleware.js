import React from 'react'
import { Navigate } from 'react-router-dom';

export const AuthMiddleware = ({
    auth,
    redirectPath = '/login',
    children,
}) => {
    if (!auth) {
        return <Navigate to={redirectPath} replace />;
    }

    return children;
};
