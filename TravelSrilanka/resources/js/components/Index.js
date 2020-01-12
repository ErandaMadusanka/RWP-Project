import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class TravelSrilanka extends Component {

    render() {
       
        const divStyle = {
            color: 'red',
            fontSize: '30px',
            
          };
          
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">Travel Srilanka.</div>
                            <div style={divStyle} className="card-body">We make it easy!</div>
                            <div class="links">
                                <a href="http://127.0.0.1:8000/places">Places</a>
                                <a href="http://127.0.0.1:8000/events">Events</a>
                                <a href="http://127.0.0.1:8000/activities">Activities</a>
                                <a href="http://127.0.0.1:8000/beaches">Beaches</a>
                                <a href="http://127.0.0.1:8000/tourpackages">Tourpackages</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('home')) {
    ReactDOM.render(<TravelSrilanka />, document.getElementById('home'));
}
