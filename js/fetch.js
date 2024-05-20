axios
    .get("https://jsonplaceholder.typicode.com/todos")
    .then((response) => {
        console.log(response.data);
    })
    .catch((error)=> {
        console.log(error);
    });

    axios.post("https://jsonplaceholder.typicode.com/posts")
    .then((response) => {
        console.log(response.data);
    })
    .catch((error)=> {
        console.log(error);
    });
