import React from 'react';
import axios from 'axios';
import './App.css';

class App extends React.Component {
  constructor(props){
    super(props);
    this.state={
      test: [],
    }
    this.test();
  }

  test() {
    axios.defaults.headers.post['Access-Control-Allow-Origin'] = '*';
    axios.get('http://localhost:8000/api/test/read')
        .then(response => {
            this.setState({
                test: response.data,
            });
        }).catch(error => {
        console.error(error);
    });
  }

  render(){
      let array = this.state.test;
      return (
      <div className="App">
        {Object.entries(array).map(([key, array], i) => (
          <div key={array.id}> {array.id} - {array.name} </div>
        ))}
      </div>
    );
  }
}

export default App;
