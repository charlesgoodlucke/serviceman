import React, { useState, useEffect } from 'react';
import Navbar from './components/Navbar';
import Hero from './components/Hero';
import Bookings from './components/Bookings';
import Features from './components/Features';
import Testimonials from './components/Testimonials';
import Footer from './components/Footer';
import CookieConsent from './components/CookieConsent';

function App() {
  const [scale, setScale] = useState(1);

  useEffect(() => {
    const handleResize = () => {
      const width = window.innerWidth;
      if (width < 1280) {
        setScale(width / 1280);
      } else {
        setScale(1);
      }
    };
    handleResize();
    window.addEventListener('resize', handleResize);
    return () => window.removeEventListener('resize', handleResize);
  }, []);

  return (
    <div className="bg-brand-background min-h-screen text-brand-dark font-sans selection:bg-brand-primary/30 selection:text-brand-primary overflow-x-hidden">
      <div 
        style={{ 
          transform: `scale(${scale})`, 
          transformOrigin: 'top left',
          width: '1280px',
          height: 'auto',
          minHeight: `${100 / scale}vh`,
        }}
      >
        <Navbar />

        <main>
          <Hero />
          <Bookings />
          <Features />
          <Testimonials />
        </main>

        <Footer />
        <CookieConsent />
      </div>
    </div>
  );
}

export default App;
