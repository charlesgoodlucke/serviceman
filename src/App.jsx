import React from 'react';
import Navbar from './components/Navbar';
import Hero from './components/Hero';
import Bookings from './components/Bookings';
import Features from './components/Features';
import Testimonials from './components/Testimonials';
import Footer from './components/Footer';
import CookieConsent from './components/CookieConsent';

function App() {
  return (
    <>
      <Navbar />
      <div className="bg-brand-background min-h-screen text-brand-dark font-sans selection:bg-brand-primary/30 selection:text-brand-primary w-full">
        <main>
          <Hero />
          <Bookings />
          <Features />
          <Testimonials />
        </main>

        <Footer />
        <CookieConsent />
      </div>
    </>
  );
}

export default App;
