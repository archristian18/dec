import { AppBar, Toolbar, Typography } from '@material-ui/core';
import React from 'react';
import useStyles from './style'



export const Navbar = () => {

    const classes = useStyles()

    return (
        <AppBar className={classes.AppBar}>
					<Toolbar className={classes.ToolBar}>
						<Typography className={classes.textNavBar}>Navbar</Typography>
					</Toolbar>
        </AppBar>
    );
}
