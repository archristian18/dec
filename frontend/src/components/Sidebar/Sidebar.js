import React from 'react';
import useStyles from './style'

export const Sidebar = () => {

    const classes = useStyles()

    return (
        <div className={classes.container}>Sidebar</div>
    );
};
