import React from 'react';
import { TextField, Grid, Typography } from '@material-ui/core';
import { makeStyles } from '@material-ui/core/styles';

const useStyles = makeStyles(() => ({
    title: {
        position: 'relative',
        margin: 'auto',
    },

    // TextField: {
    //   padding: 20,
    // },
  
    // Label: {
    //   padding: 10,
    // },
    child: {
        position: 'relative',
        margin: 'auto',
        top: '50px',
        border: '3px solid #73AD21',
    }

}));

export default function SignIn() {
    const classes = useStyles();
  
    return (
        <Grid container className={classes.title} >
            <div className="">
                <Typography variant="h6" className={classes.Label}>
              Sign In
                </Typography>
                <Grid className={classes.TextField} item l={12} sm={12}>
                    <TextField id="outlined-basic" label="Username" variant="outlined" />
                </Grid>
                <Grid className={classes.TextField} item l={12} sm={12}>
                    <TextField id="outlined-basic" label="Password" variant="outlined" />
                </Grid>
            </div>
        </Grid>
      
    );
}
  
