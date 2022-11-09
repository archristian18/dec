import React from 'react';
import { Rightbar } from './components/Rightbar/Rightbar';
import { Sidebar } from './components/Sidebar/Sidebar';
import { Navbar } from './components/Navbar/Navbar';
import { Feed } from './components/Feed/Feed';
import { Grid } from '@mui/material';
import useStyles from './style'

function App() {
  
  const classes = useStyles()

    return (
      <Grid>
        <Grid className={classes.navBar}>
        <Navbar />
        </Grid>
        <Grid container spacing={2} className={classes.container}>
          <Grid item sx={{ display: {xs:"none", sm:"block"}}} md="1" l="3"  className={classes.Sidebar}>
            <Sidebar />
          </Grid>
          <Grid item xs="12" sm="8" md="8" l="3" className={classes.Feed}>
            <Feed />
          </Grid>
          <Grid item sm="2" md="2" sx={{ display: {xs:"none", sm:"block"}}} l="3" className={classes.Rightbar}>
            <Rightbar />
          </Grid>
        </Grid>
      </Grid>
    );
}

export default App;
