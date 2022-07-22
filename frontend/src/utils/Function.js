
export const AppTitle = (newTitle) => {
    return (document.title = newTitle);
}

export const Auth = (check='') => {
    let user = localStorage.getItem('user');
    if (user){
        return true;
        if (check!==''){
            return JSON.parse(user);
        }else{
            return JSON.parse(user).apitoken;
        }
    }
    return false;
}
