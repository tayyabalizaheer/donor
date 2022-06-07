import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';
import "./assets/extra-libs/c3/c3.min.css";
import "./assets/libs/chartist/dist/chartist.min.css";
import "./assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css";
import "./dist/css/style.min.css";
import "./dist/css/custom.css";
import "./assets/css/footer.css";
import { Helmet } from "react-helmet";

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  <React.StrictMode>
    <App />
    <Helmet>
      <script src="./assets/libs/jquery/dist/jquery.min.js" type="text/jsx" />
      <script src="./assets/libs/popper.js/dist/umd/popper.min.js" type="text/jsx" />
      <script src="./assets/libs/bootstrap/dist/js/bootstrap.min.js" type="text/jsx" />
      <script src="./dist/js/app-style-switcher.js" type="text/jsx" />
      <script src="./dist/js/feather.min.js" type="text/jsx" />
      <script src="./assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js" type="text/jsx" />
      <script src="./dist/js/sidebarmenu.js" type="text/jsx" />
      <script src="./dist/js/custom.min.js" type="text/jsx" />
    </Helmet>
  </React.StrictMode>
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
