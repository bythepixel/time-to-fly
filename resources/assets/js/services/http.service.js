import Axios from 'axios';

const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;

export default Axios.create({
    headers: {}
});
