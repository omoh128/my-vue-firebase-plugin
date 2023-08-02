// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import 'firebase/firestore';
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyDeUAl_-Pr4fv_YJfQfVFFepX_0aiRlDpA",
  authDomain: "my-vue-firebase-plugin.firebaseapp.com",
  projectId: "my-vue-firebase-plugin",
  storageBucket: "my-vue-firebase-plugin.appspot.com",
  messagingSenderId: "413819258515",
  appId: "1:413819258515:web:e37ba356e9bc83025a2f66",
  measurementId: "G-WYX0FVP222"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
