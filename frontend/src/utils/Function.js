
export const AppTitle = (newTitle) => {
    return (document.title = newTitle);
}

export const Auth = (check='') => {
    let user = localStorage.getItem('user');
    return user ? true : false;
}
export const User = (check = '') => {
    let user = localStorage.getItem('user');
    return JSON.parse(user) ?? false;
}
