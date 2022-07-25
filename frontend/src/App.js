import './App.css';
import Views from './components';
import 'toastr/build/toastr.css'
function App() {
 
  return (
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
      data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
      <Views/>

    </div>
  );
}

export default App;
