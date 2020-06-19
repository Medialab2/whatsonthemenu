import React from 'react'; 
import {NavLink} from 'react-router-dom';

const NavBar = () => { 
    return ( 
			<nav className='header-nav'>
				<NavLink to='/'  exact activeClassName='header-nav-logo'>
					<h3>What's On The Menu?</h3>
				</NavLink>
				<ul className='header-nav-links'>
					<li>
						<strong>Restaurant:{" "}</strong>
						<NavLink to='/login'>
							<span>Log-in </span>
						</NavLink>
						of{" "}
						<NavLink to='/signup'>
							<span>Registreer</span>
						</NavLink>
					</li>
				</ul>
			</nav>
    )
}

export default NavBar;


