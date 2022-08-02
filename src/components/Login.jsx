import React, { Component } from 'react';
import { Form, Button } from 'react-bootstrap';
import { Navigate } from 'react-router-dom';

export default class Login extends Component {

    constructor(props) {
        super(props)
        let loggedIn = false

        this.state = {
            username: '',
            password: '',
            loggedIn
        }

        this.onChange = this.onChange.bind(this)
        this.submitForm = this.submitForm.bind(this)
    }

    onChange(e) {
        this.setState({
            [e.target.name]: e.target.value
        })
    }

    submitForm(e) {
        e.preventDefault()
        const { username, password } = this.state
        

        //Logic

        if (username === "Hemant" && password === "123") {
            this.setState({
                loggedIn: true
            })
            alert("Successfully Log In");
        }

        else if (username === "alltake" && password === "password") {
            this.setState({
                loggedIn: true
            })
            alert("Successfully Log In");
        }
        
        else {
            alert("You are not autorized person");
        }
    }

    render() {
        if (this.state.loggedIn) {
            return <Navigate to="/admin" />
        }

        return (
            <>
                <div className='container p-5 border mt-5'>
                    <p className='text-primary fs-4'>Log In Here</p>
                    <Form className='p-2' onSubmit={this.submitForm}>
                        <Form.Group className="mb-3" controlId="formBasicEmail">
                            <Form.Label>name</Form.Label>
                            <Form.Control type="name" placeholder="username" name="username" value={this.state.username} onChange={this.onChange} />
                        </Form.Group>

                        <Form.Group className="mb-3" controlId="formBasicPassword">
                            <Form.Label>Password</Form.Label>
                            <Form.Control type="password" placeholder="password" name="password" value={this.state.password} onChange={this.onChange} />
                        </Form.Group>
                        <Button variant="primary" type="submit">
                            Log In
                        </Button>
                    </Form>
                </div>
            </>
        )
    }
}


